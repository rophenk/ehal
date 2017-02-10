@extends('halo.master')
@section('title', 'Kirim Dokumen Pertanyaan Melalui Email' )

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
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- UI Alerts API -->
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Kirim Dokumen Pertanyaan Melalui Email</a>
                        </li>
@endsection

@section('content')
						<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Form Kirim Pertanyaan Melalui Email</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div id="bootstrap_alerts_demo"> </div>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal" method="post" action="/process-email-question/{{$workmeeting->uuid}}">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Rapat Kerja</label>
                                                <div class="col-md-10">
                                                {{$workmeeting->name}}
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label for="single-append-text" class="col-md-2 control-label">Tujuan Email</label>
                                                <div class="input-group select2-bootstrap-append">
                                                    <select id="single-append-text" class="form-control select2-allow-clear" name="speakers_email[]" multiple="yes">
                                                        <option></option>
                                                        <optgroup label="Kementerian Pertanian">
                                                            @forelse($kementan as $kementan)
                                                            <option value="{{$kementan->email}}">{{$kementan->name}}</option>
                                                            @empty
                                                            @endforelse
                                                        </optgroup>
                                                       
                                                    </select>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                            <span class="glyphicon glyphicon-search"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                    <input type="hidden" name="workmeeting_id" value="{{ $workmeeting->id}}" />
                                                    <button type="reset" class="btn default">Cancel</button>
                                                    <button type="submit" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <em><a href="http://tandem.setjen.pertanian.go.id">Sumber : TANDEM SETJEN PERTANIAN</a></em>
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
        <script src="{{URL::asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
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
<script src="{{URL::asset('assets/pages/scripts/components-select2.js')}}" type="text/javascript"></script>
@endsection