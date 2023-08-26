@extends('layouts.app')

@section('styles')
    <!-- Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- page-header -->
    <div class="page-header">
        <ol class="breadcrumb">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="{{ route('admin.homepage') }}">{{ __('admin.homepage') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('admin.websetting') }}</li>
            <li class="breadcrumb-item active" aria-current="page">Logs</li>
        </ol><!-- End breadcrumb -->
        
    </div>
    <!-- End page-header -->

    <!-- row opened -->
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="logs-datatable" class="table table-bordered key-buttons text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0" width="5%">{{__('log::module.datatable.id')}}</th>
                                    <th class="border-bottom-0" width="30%">{{__('log::module.datatable.log_name')}}</th>
                                    <th class="border-bottom-0" width="40%">{{__('log::module.datatable.description')}}</th>
                                    <th class="border-bottom-0" width="40%">{{__('log::module.datatable.subject_type')}}</th>
                                    <th class="border-bottom-0" width="40%">{{__('log::module.datatable.event')}}</th>
                                    <th class="border-bottom-0" width="40%">{{__('log::module.datatable.subject_id')}}</th>
                                    <th class="border-bottom-0" width="40%">{{__('log::module.datatable.updated_at')}}</th>
                                    <th class="border-bottom-0" width="5%">{{ __('log::module.datatable.manage') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection('content')

@section('scripts')
    <!--Jquery Sparkline js-->
    <script src="{{ URL::asset('assets/plugins/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle js-->
    <script src="{{ URL::asset('assets/plugins/vendors/circle-progress.min.js') }}"></script>

    <!--Time Counter js-->
    <script src="{{ URL::asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/counters/counter.js') }}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('assets/plugins/datatable/datatable-2.js') }}"></script> -->


    <!-- Notifications js -->
    <link href="{{ URL::asset('assets/plugins/notify-growl/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/notify-growl/css/notifIt.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/plugins/bootbox/bootbox.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify-growl/js/rainbow.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify-growl/js/jquery.growl.js') }}"></script>

    <!-- mwz master js css -->
    <link rel="stylesheet" href="{{ mix('css/mwz.css') }}">
    <script src="{{ mix('js/mwz.js') }}"></script>

    <!-- module js css -->
    <link rel="stylesheet" href="{{ mix('css/log.css') }}">
    <script src="{{ mix('js/log.th.js') }}"></script>
    <script src="{{ mix('js/log.js') }}"></script>
@endsection
