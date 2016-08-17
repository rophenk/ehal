@extends('halo.master')
@section('title', 'Dokumen Raker' )

@section('pagestyle')
        <link href="{{URL::asset('assets/pages/css/progress_style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{URL::asset('assets/pages/scripts/upload_progress.js')}}" type="text/javascript"></script>
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
                            <a href="#" class="active">Dokumen Raker</a>
                        </li>
@endsection

@section('content')
						<div class="col-md-12">
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption font-green-haze">
                                        <i class="fa fa-paperclip font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Dokumen Rapat Kerja</span>
                                    </div>
								</div>
								<div id="bootstrap_alerts_demo"> </div>
								<div class="portlet-body form">
								{{ $workmeeting->name }}
									<form action="/add-document/{{ $workmeeting->uuid }}" id="myForm" name="frmupload" method="post" enctype="multipart/form-data">
									  <input type="file" id="upload_file" name="upload_file" /><br />
									  <input type="hidden" name="uuid" value="{{ $workmeeting->uuid }}">
									  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
									  <input type="submit" class="btn btn-primary" name='submit_image' value="Unggah Dokumen" onclick="upload_image();"/>
									</form>
									<div class="progress" id="progress_div">
									<div class="bar" id="bar1"></div>
									<div class="percent" id="percent1">0%</div>
									</div>
									<div id="output_image">
									<div>
									<ul>
									@forelse($doclist as $doc)
										<li>
											<a href="{{ $doc->url }}" target="_blank">{{ $doc->title }}</a>
											&nbsp; <a href="/delete-document/{{ $doc->uuid }}/{{ $workmeeting->uuid }}" onclick="return confirmDelete();"><span class="label label-sm label-danger"> <i class="fa fa-times"></i> Hapus </span></a>
										</li>
									@empty
									@endforelse
									</ul>
									</div>
								</div>
							</div>
						</div>
@endsection

@section('page-plugins')
        <script src="{{URL::asset('assets/global/plugins/jquery-form/jquery-form.js')}}" type="text/javascript"></script>
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
@endsection