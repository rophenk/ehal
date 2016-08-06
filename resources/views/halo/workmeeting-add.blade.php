@extends('halo.master')
@section('title', 'Tambah Rapat Kerja' )

@section('pagestyle')
        <link href="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
        <!-- UI Alerts API -->
        <link href="{{URL::asset('assets/global/plugins/codemirror/lib/codemirror.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/neat.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/ambiance.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/material.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/neo.css')}}" rel="stylesheet" type="text/css" />
        <!-- UI Alerts API -->
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Tambah Rapat Kerja</a>
                        </li>
@endsection

@section('content')
						<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Form Tambah Rapat Kerja</span>
                                    </div>
                                    <div class="actions">
                                        <!--<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>-->
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div id="bootstrap_alerts_demo"> </div>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal" method="post" action="/add-workmeeting">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Tanggal Kegiatan</label>
                                                <div class="col-md-10">
                                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                        <input class="form-control form-control-inline input-medium" name="date" size="16" type="text" value="" data-date-format="dd-mm-yyyy" data-date-viewmode="years" />
                                                        <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        <span class="help-block"> Select date </span>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Nama Kegiatan</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" class="form-control" id="form_control_1" placeholder="Nama Kegiatan">
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Diisi Lengkap dengan Tema Raker</span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Tempat Kegiatan</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="location" class="form-control" id="form_control_1" placeholder="Tempat Kegiatan Raker">
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Diisi dengan lokasi kegiatan</span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <label class="col-md-2 control-label" for="form_control_1">Textarea</label>
                                                <div class="col-md-10">
                                                    <textarea name="description" class="wysihtml5 form-control" rows="6" placeholder="Enter more text"></textarea>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                    <button type="reset" class="btn default">Cancel</button>
                                                    <button type="submit" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
@endsection

@section('page-plugins')
        <script src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
        
        <script src="{{URL::asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
        <!-- UI Alerts API -->
        <script src="{{URL::asset('assets/global/plugins/codemirror/lib/codemirror.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/javascript/javascript.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/css/css.js')}}" type="text/javascript"></script>
       <!-- UI Alerts API -->
@endsection

@section('page-scripts')
<script src="{{URL::asset('assets/pages/scripts/components-editors.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
<?php if($message == "success") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
<?php } elseif ($message == "deleted") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
<?php } ?>
@endsection