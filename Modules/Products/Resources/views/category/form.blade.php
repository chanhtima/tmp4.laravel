@extends('layouts.app')

@section('styles')
    <!--Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Time picker css-->
    <link href="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />

    <!-- Date Picker css-->
    <link href="{{ URL::asset('assets/plugins/spectrum-date-picker/spectrum.css') }}" rel="stylesheet" />

    <!-- File Uploads css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/dropify.css') }}" rel="stylesheet" type="text/css" />

    <!--Mutipleselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css') }}">

    <!--switch-button css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap-switch/bootstrap-switch-button.min.css') }}">

    <!-- Gallery css -->
    <link href="{{ asset('assets/css/upload-image.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- page-header -->
    <div class="page-header">
        <ol class="breadcrumb">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="{{ route('admin.homepage') }}">{{ __('admin.homepage') }}</a></li>
            <li class="breadcrumb-item">สินค้า</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.category.index') }}">หมวดหมู่</a></li>
            <li class="breadcrumb-item active" aria-current="page"
                data-sidebar="{{ route('admin.product.category.index') }}">
                {{ !empty($data->id) ? 'แก้ไข' : 'เพิ่ม' }}</li>
        </ol><!-- End breadcrumb -->
    </div>
    <!-- End page-header -->

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="category_frm" name="category_frm" method="POST" onsubmit="setSaveCategory(this); return false;"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ !empty($data->id) ? $data->id : '0' }}">

                    <div class="card-header p-3 border-bottom">
                        <div class="tabs-menu1 ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs" id="product-category-{{ !empty($data->id) ? $data->id : '0' }}">
                                <li class="___class_+?10___"><a href="#tab5" class="active" data-toggle="tab">หมวดหมู่</a>
                                </li>
                                <li><a href="#tab6" data-toggle="tab">{{ __('websetting_admin.seo') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content">
                            <div class="tab-pane p-0 active" id="tab5">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <?= image_upload($id = '1', $name = 'image', $label = __('websetting_admin.upload_image_header'), $image = !empty($data->image) ? $data->image : '', $size_recommend = '300 x 300px') ?>
                                    </div>
                                    {{-- <div class="form-group col-6">
                                        <?= image_upload($id = '2', $name = 'icon', $label = 'รูปไอคอน', $image = !empty($data->icon) ? $data->icon : '', $size_recommend = '45 x 45px') ?>
                                    </div> --}}
                                </div>
                                
                                <div class="tab_wrapper mb-3" id="product-category-tab">
                                    <!-- Tabs -->
                                    <ul class="tab_list">
                                        <li class=""><img style="height: 16px;"
                                                src="{{ URL::asset('assets/images/flags/th.svg') }}"></li>
                                        <li><img style="height: 16px;"
                                                src="{{ URL::asset('assets/images/flags/gb.svg') }}"></li>
                                    </ul>

                                    <div class="content_wrapper">

                                        <!-- category_form_th -->
                                        @includeIf('products::category.form_th')
                                        <!-- .category_form_th -->

                                        <!-- category_form_en -->
                                        @includeIf('products::category.form_en')
                                        <!-- .category_form_en -->

                                    </div>
                                </div>

                                <!-- category_form_other -->
                                @includeIf('products::category.form_other')
                                <!-- .category_form_other -->
                            </div>
                            <div class="tab-pane p-0" id="tab6">
                                @includeIf('products::category.seo.form')
                            </div>
                            <div class="form-group mb-1">
                                <div class="btn-list">
                                    <button type="button" onclick="$(this).closest('form').submit();"
                                        class="btn btn-primary"><i class="fa fa-save mr-1"></i>บันทึก</button>
                                    <button onclick="mwz_redirect('{{ route('admin.product.category.index') }}');"
                                        type="button" class="btn btn-warning">
                                        <i class="fa fa-undo mr-1" aria-hidden="true"></i>ย้อนกลับ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab -->
                    <!-- .tab -->
                </form>
            </div>
        </div>
    </div>
    <!-- .row -->
@endsection('content')

@section('scripts')
    <!--Jquery Sparkline js-->
    <script src="{{ URL::asset('assets/plugins/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- File uploads js -->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/dropify-demo.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script> -->

    <!--MutipleSelect js-->
    <script src="{{ URL::asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

    <!--ckeditor js-->
    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('assets/js/formeditor.js') }}"></script> -->

    <!-- Notifications js -->
    <link href="{{ URL::asset('assets/plugins/notify-growl/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/notify-growl/css/notifIt.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/plugins/bootbox/bootbox.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify-growl/js/rainbow.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify-growl/js/jquery.growl.js') }}"></script>

    <!-- validator js -->
    <script src="{{ URL::asset('assets/plugins/validator/js/jquery.validate.min.js') }}"></script>

    <!-- tab -->
    <script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <link href="{{ URL::asset('assets/plugins/tabs/tabs-style.css') }}" rel="stylesheet" />

    <!-- Gallery js -->
    

    <!-- bootstrap-switch -->
    <script src="{{ URL::asset('assets/plugins/bootstrap-switch/bootstrap-switch-button.min.js') }}"></script>

    <!-- mwz  js css -->
    <link rel="stylesheet" href="{{ mix('css/mwz.css') }}">
    <script src="{{ mix('js/mwz.js') }}"></script>

    <!-- module js css -->
    <link rel="stylesheet" href="{{ mix('css/product.css') }}">
    <script src="{{ mix('js/product_category.js') }}"></script>
    <script src="{{ mix('js/product.th.js') }}"></script>
@endsection
