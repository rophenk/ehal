@extends('halo.master')
@section('title', 'Detail Anggota' )

@section('pagestyle')
        
        <link href="{{URL::asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Detail Anggota</a>
                        </li>
@endsection

@section('content')
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div id="bootstrap_alerts_demo"> </div>
                                <div class="profile">
                                    <div class="tabbable-line tabbable-full-width">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_3" data-toggle="tab"> Account </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!--tab_1_2-->
                                            
                                                <div class="row profile-account">
                                                    <div class="col-md-3">
                                                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#tab_1-1">
                                                                    <i class="fa fa-cog"></i> Personal info </a>
                                                                <span class="after"> </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="tab-content">
                                                            <div id="tab_1-1" class="tab-pane active">
                                                                <form role="form" method="post" action="/add-speaker">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nama</label>
                                                                        <input type="text" name="name" placeholder="Nama Anggota DPR" class="form-control" /> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <input type="text" name="email" placeholder="alamat@email.com" class="form-control" /> </div>
                                                                    <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Ketua Fraksi</label>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="fraction_leader" id="fraction_leader" value="yes"> Ya
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="fraction_leader" id="fraction_leader" value="no" checked> Bukan
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Fraksi</label>
                                                                        <div>
                                                                            <select class="form-control" name="fraction_id">
                                                                                @forelse($fraction as $fraction)
                                                                                <option value="{{ $fraction->id }}">{{ $fraction->name }}</option>
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="margiv-top-10">
                                                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                                        <button type="submit" class="btn blue"> Save Changes </button>
                                                                        <button type="reset" class="btn default"> Cancel </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-md-9-->
                                                </div>
                                           
                                            <!--end tab-pane-->
                                            <!--end tab-pane-->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
@endsection

@section('page-scripts')
        <script src="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
        <?php if($message == "success") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
<?php } elseif ($message == "deleted") { ?>
<script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
<?php } ?>
        
@endsection