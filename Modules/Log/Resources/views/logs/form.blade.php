@extends('layouts.app')

@section('styles')
    <!---Tabs js-->
    <link href="{{ URL::asset('assets/plugins/tabs/tabs-style.css') }}" rel="stylesheet" />

    <!--Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Datetime Picker css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datetime-picker/bootstrap-datetimepicker.min.css') }}">

    <!-- File Uploads css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/dropify.css') }}" rel="stylesheet" type="text/css" />

    <!--Mutipleselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css') }}">

    <link href="{{ asset('assets/css/upload-image.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- page-header -->
    <div class="page-header">
        <ol class="breadcrumb">
            <!-- breadcrumb -->
            <li class="breadcrumb-item">
                <a href="{{ route('admin.homepage') }}">{{ __('admin.homepage') }}</a></li>
            <li class="breadcrumb-item " aria-current="page">
                <a href="{{ route('admin.log.log.index') }}">{{ __('log::module.name') }}</a>
            </li>
           
            <li class="breadcrumb-item active" aria-current="page">
                {{ !empty($data->id) ?  __('user::module.action.view')  : __('user::module.action.view') }}
            </li>
        </ol>
    </div>
    <!-- End page-header -->

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <form id="permission_frm" name="permission_frm" method="POST" onsubmit="setSave(); return false;"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ !empty($data->id) ? $data->id : '0' }}">
                <div class="card">
                    <div class="card-header p-3 border-bottom">
                        <div class="tabs-menu1 ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs" id="permission-main-tab">
                                <li><a href="#permission-main-tab-1" class="active" data-toggle="tab">{{ __('log::module.name') }}</a></li>
                            </ul>
                            <!-- .Tabs -->
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content">
                            <div class="tab-pane active" id="permission-main-tab-1">
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card" >
                                                <div class="card-body">
                                                    <h5 class="card-title">Raw <?=$data->log_name?></h5>
                                                    {{-- <h6 class="card-subtitle mb-2 text-muted"><?=$data->log_name?></h6> --}}
                                                    <p class="card-text">
                                                        <pre><?php print_r($data->toArray()) ;?></pre>
                                                    </p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <?php 
                                                $properties = (!empty($data->properties))?json_decode($data->properties,1):'' ;
                                            ?>
                                            <div class="card" >
                                                <div class="card-body">
                                                    <h5 class="card-title">New</h5>
                                                    {{-- <h6 class="card-subtitle mb-2 text-muted"><?=$data->log_name?></h6> --}}
                                                    <p class="card-text">
                                                        <pre>
                                                            <?php 
                                                            if(!empty($properties['attributes'])){
                                                                 print_r($properties['attributes']); 
                                                            }
                                                            ?> 
                                                        </pre>
                                                    </p>
                                                   
                                                </div>
                                            </div>
                                            <div class="card" >
                                                <div class="card-body">
                                                    <h5 class="card-title">Old</h5>
                                                    {{-- <h6 class="card-subtitle mb-2 text-muted"><?=$data->log_name?></h6> --}}
                                                    <p class="card-text">
                                                        <pre>
                                                            <?php 
                                                            if(!empty($properties['old'])){
                                                                 print_r($properties['old']); 
                                                            }
                                                            ?> 
                                                        </pre>
                                                    </p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        
                    </div>
                </div>

            </form>
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

    <!-- Datetimepicker js -->
    <script src="{{ URL::asset('assets/plugins/datetime-picker/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datetime-picker/bootstrap-datetimepicker.min.js') }}"></script>

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

    <!-- bootstrap-switch -->
    <script src="{{ URL::asset('assets/plugins/bootstrap-switch/bootstrap-switch-button.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap-switch/bootstrap-switch-button.min.css') }}">

    <!-- mwz master js css -->
    <link rel="stylesheet" href="{{ mix('css/mwz.css') }}">
    <script src="{{ mix('js/mwz.js') }}"></script>

    <!-- module js css -->
    <link rel="stylesheet" href="{{ mix('css/user_permission.css') }}">
    <script src="{{ mix('js/user.th.js') }}"></script>
    <script src="{{ mix('js/user_permission.js') }}"></script>
@endsection
