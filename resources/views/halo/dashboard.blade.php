@extends('halo.master')
@section('title', 'Dashboard' )
@section('title_description', 'Dashboard And Summary' )
@section('pagestyle')
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="/dashboard" class="active">Dashboard</a>
                        </li>
@endsection

@section('content')
                        <div class="row widget-row">
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Rapat Kerja</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-notebook"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Tercatat</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ $workmeeting->count }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Anggota</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red icon-users"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">DPR</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ $speakers->count }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Pertanyaan</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-purple icon-question"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Terjawab</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ $workmeeting_question->count }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Berkas</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-paper-clip"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Tersimpan</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ $workmeeting_document->count }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-directions font-green hide"></i>
                                        <span class="caption-subject bold font-dark uppercase "> Rapat Kerja</span>
                                        <span class="caption-helper">Terbaru</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="cd-horizontal-timeline mt-timeline-horizontal">
                                        <div class="timeline">
                                            <div class="events-wrapper">
                                                <div class="events">
                                                    <ol>
                                                    @forelse($workmeeting_timeline as $key => $value)
                                                     <?php 
                                                     
                                                     if($key == 0) {
                                                        $selected = 'selected'; 
                                                    } else {
                                                        $selected ='';
                                                    }
                                                     ?>
                                                        <li>
                                                            <a href="#0" data-date="{{ $value->date_data }}" class="border-after-red bg-after-red <?php echo $selected; ?>">{{ $value->date_display }}</a>
                                                        </li>
                                                    @empty
                                                    @endforelse
                                                    </ol>
                                                    <span class="filling-line bg-red" aria-hidden="true"></span>
                                                </div>
                                                <!-- .events -->
                                            </div>
                                            <!-- .events-wrapper -->
                                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                                <li>
                                                    <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="next btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .cd-timeline-navigation -->
                                        </div>
                                        <!-- .timeline -->
                                        <div class="events-content">
                                            <ol>
                                            @forelse($workmeeting_timeline as $key => $value)
                                             <?php 
                                             //var_dump($value);die();
                                             if($key == 0) {
                                                $selected = ' class="selected"'; 
                                            } else {
                                                $selected ='';
                                            }
                                             ?>
<li<?php echo $selected; ?> data-date="{{ $value->date_data }}">
                                                    <div class="mt-title">
                                                        <h2 class="mt-content-title">{{ $value->name }}</h2>
                                                    </div>

                                                    <div class="mt-author">
                                                        <div class="mt-avatar">
                                                            <img src="{{URL::asset('img/logo.png')}}" />
                                                        </div>
                                                        <div class="mt-author-name">
                                                            <a href="javascript:;" class="font-blue-madison">{{ $user->name }}</a>
                                                        </div>
                                                        <div class="mt-author-datetime font-grey-mint">{{ $value->date_author}}</div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="mt-content border-grey-steel">
                                                        <p>{{ $value->description }}</p>
                                                        <a href="/edit-workmeeting/{{ $value->uuid }}" class="btn btn-circle red btn-outline">Read More</a>
                                                        <a href="/add-workmeeting" class="btn btn-circle btn-icon-only blue">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                                
                                            </ol>
                                        </div>
                                        <!-- .events-content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-dark hide"></i>
                                        <span class="caption-subject font-hide bold uppercase">Anggota DPR</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="/add-speaker#tab_1_3"> Tambah </a>
                                                </li>
                                                <li>
                                                    <a href="/speakers-list"> Daftar Lengkap </a>
                                                </li>
                                                <li class="divider"> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                     @forelse($random_speakers as $random)
                                        <div class="col-md-4">
                                            <!--begin: widget 1-1 -->
                                           
                                            <div class="mt-widget-1">
                                                <div class="mt-icon">
                                                    <a href="speaker-view/{{$random->uuid}}">
                                                        <i class="icon-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-img">
                                                    <img src="{{ $random->photo }}" width="80px"> </div>
                                                <div class="mt-body">
                                                    <h3 class="mt-username">{{ $random->name }}</h3>
                                                    <p class="mt-user-title"> {{ $random->fraction_name }} </p>
                                                </div>
                                            </div>
                                            <!--end: widget 1-1 -->
                                        </div>

                                            @empty
                                            @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('page-plugins')
         <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/horizontal-timeline/horozontal-timeline.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
@endsection

@section('page-scripts')
        <script src="../assets/pages/scripts/dashboard.js" type="text/javascript"></script>
@endsection