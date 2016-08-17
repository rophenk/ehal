@extends('halo.master')
@section('title', 'Sespri / TA' )

@section('pagestyle')
        <!-- UI Alerts API -->
        <link href="{{URL::asset('assets/global/plugins/codemirror/lib/codemirror.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/neat.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/ambiance.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/material.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/codemirror/theme/neo.css')}}" rel="stylesheet" type="text/css" />
        
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Sespri / TA</a>
                        </li>
@endsection

@section('content')
		<div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Form Tambah Sespri / TA</span>
                    </div>
                    <div class="actions">
                        <!--<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>-->
                        <a class="btn btn-circle btn-icon-only red" href="/delete-assistant/{{ $assistant->id }}/{{ $speakers->uuid }}"  onclick="return confirmDelete();">
                            <i class="icon-trash"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div id="bootstrap_alerts_demo"> </div>
                <div class="portlet-body form">
                    <form role="form" class="form-horizontal" method="post" action="/edit-assistant/{{ $speakers->uuid }}">
                        <div class="form-body">
                         <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Nama Anggota DPR</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Nama Kegiatan" value="{{ $speakers->name }}" readonly="true">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Diisi Nama Anggota DPR</span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Nama Sespri / TA </label>
                                <div class="col-md-10">
                                    <input type="text" name="name" value="{{ $assistant->name }}" class="form-control" id="form_control_1" placeholder="Nama Sespri / TA ">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Diisi Lengkap dengan Tema Raker</span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label">Email 1
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email1" value="{{ $assistant->email1 }}" class="form-control" placeholder="Email Address"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label">Email 2
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email2" value="{{ $assistant->email2 }}" class="form-control" placeholder="Email Address"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Phone</label>
                                <div class="col-md-10">
                                    <input type="text" name="phone" value="{{ $assistant->phone }}" class="form-control" id="form_control_1" placeholder="Phone">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Diisi dengan Phone</span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label">Roles</label>
                                <div class="col-md-10 mt-radio-inline">
                                    <label class="mt-radio">
                                        <input type="radio" name="roles" id="roles" value="sespri" @if ($assistant->roles === "sespri") checked @endif> Sespri
                                        <span></span>
                                    </label>
                                    <label class="mt-radio">
                                        <input type="radio" name="roles" id="roles" value="" @if ($assistant->roles !== "sespri") checked @endif> T/A
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                	<input type="hidden" name="id" value="{{ $assistant->id }}" />
                                	<input type="hidden" name="uuid" value="{{ $speakers->uuid }}" />
                               		<input type="hidden" name="speakers_id" value="{{ $speakers->id }}" />
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <button type="reset" class="btn default">Cancel</button>
                                    <button type="submit" class="btn blue">Submit</button>
                                </div>
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
 		<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <!-- UI Alerts API -->
        <script src="{{URL::asset('assets/global/plugins/codemirror/lib/codemirror.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/javascript/javascript.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/codemirror/mode/css/css.js')}}" type="text/javascript"></script>
       <!-- UI Alerts API -->
@endsection

@section('page-scripts')
		<?php if($message == "success") { ?>
		<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
		<?php } elseif ($message == "deleted") { ?>
		<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
		<?php } ?>
        <script src="../assets/pages/scripts/form-validation.assistant.js" type="text/javascript"></script>
@endsection