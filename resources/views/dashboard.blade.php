@extends('layouts.template')

@section('title',"Dashboard")

@section('head')
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="dist/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/css/core/colors/palette-gradient.css">

@stop



<!-- content-body -->
@section('content-body')
    <!-- Emails Products & Avg Deals -->
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Total</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                <h4 class="font-large-2 text-bold-400">12</h4>
                                <p class="blue-grey lighten-2 mb-0">File for Title Clearance</p>
                            </div>
                            <div class="col-md-6 col-12 text-center">
                                <h4 class="font-large-2 text-bold-400">48</h4>
                                <p class="blue-grey lighten-2 mb-0">Find Applications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Revenue, Hit Rate & Deals -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Query </h6>
                                <h3>68</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-user success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Search</h6>
                                <h3>38</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-magnifier-add danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Process</h6>
                                <h3>18</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-disc success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Checking</h6>
                                <h3>43</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-refresh danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Ready</h6>
                                <h3>123</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-like success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Pending</h6>
                                <h3>21</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-call-in danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Revenue, Hit Rate & Deals -->



@stop

@section('js_script')

    <script src="dist/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script src="dist/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="dist/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="dist/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
            type="text/javascript"></script>
    <script src="dist/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
            type="text/javascript"></script>
    <script src="dist/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="dist/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="dist/app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

@stop