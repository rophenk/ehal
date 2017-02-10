@extends('halo.master')
@section('title', 'Email Jawaban Terkirim' )

@section('pagestyle')
        
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Email Jawaban Terkirim</a>
                        </li>
@endsection

@section('content')
<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Status Pengiriman Email</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div id="bootstrap_alerts_demo"> </div>
                                <div class="portlet-body form">
                                	<h4>Email Dikirim ke alamat Berikut :</h4>
                                	<ul>
                                	@forelse($speakers_email as $speakersmail)
                                	<?php
                                	if(!empty($speakersmail)) {
                                	?>
                                		<li>{{ $speakersmail }}</li>
                                	<?php	
                                	}
                                	?>
                             
                                		
                                	@empty
                                	@endforelse
                                	</ul>
                                    <div class="btn-group">
                                        <a href="/form-email-question/{{$workmeeting->uuid}}">
                                          <button id="sample_editable_1_new" class="btn sbold green"> Kirim Ke Staff Lain
                                            <i class="fa fa-share"></i>
                                          </button>
                                        </a>
                                        &nbsp;
                                        <a href="/question-list">
                                          <button id="sample_editable_1_new" class="btn sbold green"> Kirim Dokumen Jawaban yang Lain
                                            <i class="fa fa-table"></i>
                                          </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
@endsection

@section('page-plugins')
        
@endsection

@section('page-scripts')
<?php if($message == "success") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
<?php } elseif ($message == "deleted") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
<?php } elseif ($message == "email_sent") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-emailsent.js')}}" type="text/javascript"></script>
<?php } ?>
        
@endsection