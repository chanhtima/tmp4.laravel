<?php

namespace Modules\ContactUs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ContactUs\Entities\ContactPages;
use Modules\Mwz\Http\Controllers\SlugController;

class ContactPageAdminController extends Controller
{
     // enable special field for each type
     public $config = [
        'contact_page' => ['name' => false, 'office' => false, 'phone' => false, 'email' => true, 'twitter' => false, 'facebook' => true, 'ig' => false, 'skype' => true,'linked_in' => false,'gmaps' => false],
    ];

    /**
     * Function : add contact_page form
     * Dev : Jang
     * Update Date : 26 october 2021
     * @param GET
     * @return category form view
     */
    public function form()
    {
        $data = [];
        $data = ContactPages::find(1);
        if (!empty($data)) {
            $data->office_th = mwz_getTextString($data->office_th);
            $data->office_en = mwz_getTextString($data->office_en);
        }
        $o_slug = new SlugController;
        $metadata = $o_slug->getMetadata('contact', 'contact', 1);
        return view('contactus::page.form', ['data' => $data, 'metadata' => $metadata,'config' => $this->config['contact_page']]);
    }

    /**
     * Function :  save contact page save
     * Dev : Jang
     * Update Date : 26 october 2021
     * @param POST
     * @return json response status
     */
    public function save(Request $request)
    {

        if (!mwz_roles('admin.contactus.page.save')) {
            $resp = ['error' => 0, 'code' => 301, 'msg' => 'ไม่มีสิทธิ์การเข้าถึง!'];
            return response()->json($resp);
        }
        $o_slug = new SlugController;
        // $request['metadata'] = $o_slug->add_slug_by_name(!empty($request->get('metadata')) ? $request->get('metadata'): [],$request->get('name_th'),$request->get('name_en'));
        if (!empty($o_slug->validatorSlug($request))) {
            $error = $o_slug->validatorSlug($request);
            $resp = ['success' => 0, 'code' => 301, 'msg' => $error['msg']];
            return response()->json($resp);
        }
        
        $attributes = [
            "name_th" => !empty($request->get('name_th')) ? $request->get('name_th') : "",
            "name_en" => !empty($request->get('name_en')) ?  $request->get('name_en') : "",
            "office_th" => $request->get('office_th'),
            "office_en" => $request->get('office_en'),
            "phone" => $request->get('phone'),
            "email" => $request->get('email'),
            "twitter" => $request->get('twitter'),
            "facebook" => $request->get('facebook'),
            "ig" => $request->get('ig'),
            "skype" => $request->get('skype'),
            "linked_in" => $request->get('linkedin'),
            "gmaps" => $request->get("gmaps"),
        ];
        $attr = ['id' => (!empty($request->get('id')) ? $request->get('id') : 1)];
        $contact = ContactPages::updateOrCreate($attr, $attributes);
        $o_slug->createMetadata($request, $contact->id);
        if ($contact->save()) {
            $resp = ['success' => 1, 'code' => 200, 'msg' => 'บันทึกการเปลี่ยนแปลงสำเร็จ'];
        } else {
            $resp = ['success' => 0, 'code' => 200, 'msg' => 'เกิดข้อผิดพลาด โปรดลองอีกครั้ง'];
        }

        return response()->json($resp);
    }
}
