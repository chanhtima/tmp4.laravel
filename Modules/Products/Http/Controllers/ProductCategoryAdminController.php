<?php

namespace Modules\Products\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Modules\Mwz\Http\Controllers\SlugController;
use Modules\Products\Entities\ProductCategories;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryAdminController extends Controller
{
    /**
     * Function : product category index 
     * Dev : Tong
     * Update Date : 16 Jun 2021
     * @param Get
     * @return category.blade view
     */
    public function index()
    {
        return view('products::category.index');
    }

    /**
     * Function : product category datatable ajax response 
     * Dev : Wan
     * Update Date : 16 Nov 2022
     * @param Get
     * @return json of product category
     */
    public function datatable_ajax(Request $request)
    {
        if ($request->ajax()) {

            //init datatable
            $dt_name_column = array('sequence', 'image', 'name_th', 'name_en', 'updated_at', 'sequence');
            $dt_order_column = $request->get('order')[0]['column'];
            $dt_order_dir = $request->get('order')[0]['dir'];
            $dt_start = $request->get('start');
            $dt_length = $request->get('length');
            $dt_search = $request->get('search')['value'];

            // count all category

            // create categroy object 
            $o_categories = new ProductCategories();

            // add search query if have search from datable
            if (!empty($dt_search)) {
                $o_categories = $o_categories->where(function ($query) use ($dt_search) {
                    $query->where('name_th', 'like', "%" . $dt_search . "%")
                        ->orWhere('name_en', 'like', "%" . $dt_search . "%")
                        ->orWhere('description_th', 'like', "%" . $dt_search . "%")
                        ->orWhere('description_en', 'like', "%" . $dt_search . "%")
                        ->orWhere('updated_at', 'like', "%" . $dt_search . "%");
                });
            }

            $dt_total = $o_categories->count();

            // set query order & limit from datatable
            $o_categories->orderBy($dt_name_column[$dt_order_column], $dt_order_dir)
                ->offset($dt_start)
                ->limit($dt_length);

            // query category as tree resule
            $categories = $o_categories->get();

            // prepare datatable for resonse
            $tables = DataTables::of($categories)
                ->addIndexColumn()
                ->setRowId('id')
                ->setRowClass('category_row')
                ->setTotalRecords($dt_total)
                ->setFilteredRecords($dt_total)
                ////->setOffset($dt_start)
                ->editColumn('updated_at', function ($record) {
                    return $record->updated_at->format('Y-m-d H:i:s');
                })
                ->editColumn('sequence', function ($record) {
                    return !empty($record->sequence) ? $record->sequence : '';
                })
                ->editColumn('image', function ($record) {
                    if (CheckFileInServer($record->image) && !empty($record->image)) {
                        return '<img class="rounded" style="max-height: 60px" src="' . $record->image . '">';
                    }
                })
                ->editColumn('name_th', function ($record) {
                    $prefix = '';
                    $c = 0;
                    while ($c < $record->level) {
                        $prefix .= '-';
                        $c++;
                    }
                    return $prefix . ' ' . $record->name_th;
                })
                ->editColumn('name_en', function ($record) {
                    $prefix = '';
                    $c = 0;
                    while ($c < $record->level) {
                        $prefix .= '-';
                        $c++;
                    }
                    return $prefix . ' ' . $record->name_en;
                })
                ->addColumn('action', function ($record) {
                    $action_btn = '<div class="btn-list">';
                    if (mwz_roles('admin.product.category.edit')) {
                        // status data 
                        if ($record->status == 1) {
                            $action_btn .= '<a onclick="setUpdateCategoryStatus(' . $record->id . ',0)" href="javascript:void(0);" class="btn btn-outline-success"><i class="fa fa-check"></i></a>';
                        } else {
                            $action_btn .=  '<a onclick="setUpdateCategoryStatus(' . $record->id . ',1)" href="javascript:void(0);"  class="btn btn-outline-warning"><i class="fa fa-times"></i></a>';
                        }
                        $action_btn .= '<a href="' . route('admin.product.category.edit', $record->id) . '" class="btn btn-outline-primary"><i class="fa fa-pencil"></i></a>';
                    }
                    if (mwz_roles('admin.product.category.set_delete')) {
                        $action_btn .= '<a onclick="setDeleteCategory(' . $record->id . ')" href="javascript:void(0);" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>';
                    }
                    $action_btn .= '</div>';

                    return $action_btn;
                })
                ->escapeColumns([]);

            // response datatable json
            return $tables->make(true);
        }
    }

    /**
     * Function : add product category form
     * Dev : Tong
     * Update Date : 16 Jun 2021
     * @param GET
     * @return category form view
     */
    public function form($id = 0)
    {
        $metadata = [
            'th' => [
                'module' => 'product',
                'method' => 'category',
                'level' => 2
            ],
            'en' => [
                'module' => 'product',
                'method' => 'category',
                'level' => 2
            ],
        ];
        $data = [];
        $o_slug = new SlugController;
        if (!empty($id)) {
            $data = ProductCategories::find($id);
            $data->description_th = mwz_getTextString($data->description_th);
            $data->description_en = mwz_getTextString($data->description_en);
            $meta = $o_slug->getMetadata('product', 'category', $id);
            if (!empty($meta)) {
                $metadata = $meta;
            }
        }

        return view('products::category.form', ['data' => $data, 'metadata' => $metadata]);
    }

    /**
     * Function :  save product category 
     * Dev : wan
     * Update Date : 16 Nov 2022
     * @param POST
     * @return json of response
     */
    public function save(Request $request)
    {
        //validate post data
        $validator = Validator::make($request->all(), [
            'name_th' => 'required|max:100',
            'name_en' => 'required|max:100',
        ], [
            'name_th.*' => 'โปรดระบุชื่อหัวข้อภาษาไทย!',
            'name_en.*' => 'โปรดระบุชื่อหัวข้อภาษาอังกฤษ!',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $msg = $errors->first();
            $resp = ['success' => 0, 'code' => 301, 'msg' => $msg, 'error' => $errors];
            return response()->json($resp);
        }
        //// Check Slug
        $o_slug = new SlugController;
        $request['metadata'] = $o_slug->add_slug_by_name(!empty($request->get('metadata')) ? $request->get('metadata'): [],$request->get('name_th'),$request->get('name_en'));
        if (!empty($o_slug->validatorSlug($request))) {
            $error = $o_slug->validatorSlug($request);
            $resp = ['success' => 0, 'code' => 301, 'msg' => $error['msg']];
            return response()->json($resp);
        }

        $now = DB::raw('NOW()');
        $attributes = [
            "name_th" => $request->get('name_th'),
            "name_en" => $request->get('name_en'),
            "description_th" => mwz_setTextString($request->get('description_th')),
            "description_en" => mwz_setTextString($request->get('description_en')),
            "status" => !empty($request->get('status'))  ? $request->get('status') : 0,
            "status_footer" => !empty($request->get('status_footer')) ? $request->get('status_footer') : 0,
            "status_index" => !empty($request->get('status_index')) ? $request->get('status_index') : 0,
        ];

        if (empty($request->get('sequence'))) {
            $sequence = ProductCategories::max('sequence');
            (int)$sequence += 1;
            $attributes["sequence"] = $sequence;
        } else {
            $attributes["sequence"] = $request->get('sequence');
        }
        
        // check qty status index 
        if(!empty($request->get('status_index')) ){
            if(!empty($request->get('id'))){
                // status_index
                $data = ProductCategories::find($request->get('id'));
                if($data->status_index == 0){
                    $status_index = ProductCategories::where('status_index',1)->count();
                    if($status_index >= 4){
                        $resp = ['success' => 0, 'code' => 301, 'msg' => "หมวดแสดงหน้าแรกได้สูงสุด 4 หมวดหมู่", 'error' => 'แสดงหน้าแรก'];
                        return response()->json($resp);
                    }
                }
            }else{
                $status_index = ProductCategories::where('status_index',1)->count();
                if($status_index >= 4){
                    $resp = ['success' => 0, 'code' => 301, 'msg' => "หมวดแสดงหน้าแรกได้สูงสุด 4 หมวดหมู่", 'error' => 'แสดงหน้าแรก'];
                    return response()->json($resp);
                }
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_filename = 'category-' . time() . "." . $image->extension();
            $path = $image->storeAs(
                'public/product/category',
                $new_filename
            );
            $attributes['image'] = Storage::url($path);
            if (!empty($request->get('image_old'))) {
                $old_path = str_replace('storage', 'public', $request->get('image_old'));
                Storage::delete($old_path);
            }
        } else {
            if (!empty($request->get('image_del')) && $request->get('image_del') == 1) {
                $old_path = str_replace('storage', 'public', $request->get('image_old'));
                Storage::delete($old_path);
                $attributes['image'] = '';
            }
        }

        //icon
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $new_filename = 'category-' . time() . "." . $icon->extension();
            $path = $icon->storeAs(
                'public/product/category',
                $new_filename
            );
            $attributes['icon'] = Storage::url($path);
            if (!empty($request->get('icon_old'))) {
                $old_path = str_replace('storage', 'public', $request->get('icon_old'));
                Storage::delete($old_path);
            }
        } else {
            if (!empty($request->get('icon_del')) && $request->get('icon_del') == 1) {
                $old_path = str_replace('storage', 'public', $request->get('icon_old'));
                Storage::delete($old_path);
                $attributes['icon'] = '';
            }
        }

        if (!empty($request->get('id'))) {
            $category = ProductCategories::where('id', $request->get('id'))->update($attributes);
            $category_id = $request->get('id');
            $resp = ['success' => 1, 'code' => 200, 'msg' => 'update competet'];
        } else {
            $category = ProductCategories::create($attributes);
            $category->save();
            $category_id = $category->id;
            $resp = ['success' => 1, 'code' => 200, 'msg' => 'insert competet'];
        }
        $o_slug->createMetadata($request, $category_id);
        return response()->json($resp);
    }

    // category_set_re_order
    /**
     * Function :  set_re_order
     * Dev : Tong
     * Update Date : 21 July 2022
     * @param POST
     * @return json response update sequence status
     */
    public function set_re_order(Request $request)
    {
        if ($request->ajax()) {
            $sort_json = @json_decode($request->get('sort_json'), 1);
            if (!empty($sort_json)) {
                foreach ($sort_json as $id => $sequence) {
                    ProductCategories::find($id)->update(['sequence' => $sequence]);
                }
                $resp = ['success' => 1, 'code' => 200, 'msg' => 'เรียงข้อมูลใหม่สำเร็จ'];
            } else {
                $resp = ['success' => 0, 'code' => 300, 'msg' => 'ไม่มีข้อมูลที่ต้องเรียง'];
            }

            return response()->json($resp);
        }
    }
    /**
     * Function : update product category status
     * Dev : Tong
     * Update Date : 16 Jun 2021
     * @param POST
     * @return json of update status
     */
    public function set_status(Request $request)
    {
        if ($request->ajax()) {
            $category_id = $request->get('category_id');
            $status = $request->get('status');

            $category = ProductCategories::find($category_id);
            $category->status = $status;

            if ($category->save()) {
                $resp = ['success' => 1, 'code' => 200, 'msg' => 'อัปเดตข้อมูลสำเร็จ'];
            } else {
                $resp = ['success' => 0, 'code' => 500, 'msg' => 'เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง'];
            }

            return response()->json($resp);
        }
    }


    /**
     * Function : delete product category 
     * Dev : Tong
     * Update Date : 16 Jun 2021
     * @param POST
     * @return json of delete status
     */
    public function set_delete(Request $request)
    {
        if ($request->ajax()) {
            $category_id = $request->get('category_id');
            $category = ProductCategories::find($category_id);
           
             // delete slug
             $o_slug = new SlugController;
             $o_slug->delete_slug("product","category",$category_id);

            //  !empty($descendants)
            if ($category->delete()) {
                $resp = ['success' => 1, 'code' => 200, 'msg' => __('product::admin.res.delete_complete')];
            } else {
                $resp = ['success' => 0, 'code' => 500, 'msg' => __('product::admin.res.delete_error')];
            }
            return response()->json($resp);
        }
    }
}
