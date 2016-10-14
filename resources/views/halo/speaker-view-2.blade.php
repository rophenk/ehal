@extends('halo.master')
@section('title', 'Detail Anggota' )

@section('pagestyle')
        <link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Detail Anggota</a>
                        </li>
@endsection
@section('content')
                    <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab"> Account </a>
                                </li>
                                <!--<li>
                                    <a href="#tab_1_6" data-toggle="tab"> Help </a>
                                </li>-->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <?php if(!empty($speakers->photo)) { ?>
                                                            <li>
                                                                <img src="{{ $speakers->photo }}" class="img-responsive pic-bordered" alt="" />
                                                                <a href="/speaker-view/{{$speakers->uuid}}/#tab_2-2" class="profile-edit"> edit </a>
                                                            </li>
                                                        <?php } ?>
                                                <li>
                                                    <a href="/add-assistant/{{ $speakers->uuid }}"> Sespri / TA </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">{{ $speakers->name }}</h1>
                                                                <p> {{ $speakers->fraction->name }} </p>
                                                    
                                                   
                                                    <ul class="list-inline">
                                                        <?php if(!empty($speakers->email)) { ?>
                                                                    <li>
                                                                        <i class="icon-envelope-open"></i> {{ $speakers->email }} 
                                                                    </li>
                                                                <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end row-->
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_11" data-toggle="tab"> Inbox </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_22" data-toggle="tab"> Sespri/TA </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                   <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th> 
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> No. </th>
                                                            <th> Kegiatan </th>
                                                            <th> Tanggal Dikirim</th>
                                                            <!--<th> Actions </th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($email_log as $log)
                                                        <tr class="odd gradeX">
                                                            <td width="10%">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td width="10%" class="left"> {{ $log->id }}</td>
                                                            <td width="60%" class="left">
                                                                <a href="#">  {{ $log->workmeeting }}  </a> 
                                                            </td>
                                                            <td width="20%" class="left"> {{ $log->created_at }}</td>
                                                            <!--<td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="/speaker-view/{{ $speakers->uuid }}">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>-->
                                                        </tr>
                                                    @empty
                                                      <tr class="odd gradeX">
                                                            <td> </td>
                                                            <td>
                                                                <a href="#"> BELUM ADA DATA</a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">  </span>
                                                            </td>
                                                            <td class="center">  </td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                      @endforelse
                                                    </tbody>
                                                </table>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                    <div class="tab-pane" id="tab_1_22">
                                                        <div class="tab-pane active" id="tab_1_1_1">
                                                            <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                                <ul class="feeds">
                                                                @forelse($assistant as $assistant)
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                               
                                                                                @if ($assistant->roles === "sespri")
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-warning">
                                                                                        <i class="fa fa-user-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                                @else
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-user-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                                @endif
                                                                                
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">  <a href="/edit-assistant/{{ $assistant->id }}/{{ $speakers->uuid }}">{{ $assistant->name }} </a>
                                                                                      <br/>
                                                                                      <i class="fa fa-phone"></i>{{ $assistant->phone }} <i class="fa fa-envelope"></i>{{ $assistant->email1 }} {{ $assistant->email2 }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> {{ $assistant->roles }} </div>
                                                                        </div>
                                                                    </li>
                                                                @empty
                                                                @endforelse
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab_1-1">
                                                        <i class="fa fa-cog"></i> Personal info </a>
                                                    <span class="after"> </span>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_2-2">
                                                        <i class="fa fa-picture-o"></i> Change Avatar </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <form role="form" method="post" action="/edit-speaker/{{$speakers->uuid}}">
                                                        <div class="form-group">
                                                            <label class="control-label">First Name</label>
                                                            <input type="text" value="{{ $speakers->name }}" name="name" placeholder="John" class="form-control" /> </div>
                                                        <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <input type="text" value="{{ $speakers->email }}" name="email" placeholder="alamat@email.com" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Ketua Fraksi</label>
                                                            <div class="mt-radio-inline">
                                                                <label class="mt-radio">
                                                                    <input type="radio" name="fraction_leader" id="fraction_leader" value="yes" @if ($speakers->fraction_leader === "yes") checked @endif> Ya
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-radio">
                                                                    <input type="radio" name="fraction_leader" id="fraction_leader" value="no" @if (empty($speakers->fraction_leader)) checked @elseif ($speakers->fraction_leader === "no") checked @endif> Bukan
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                        <label class="control-label">Fraksi</label>
                                                                        <input type="text" value="{{ $speakers->fraction->name }}" placeholder="Nama Fraksi" class="form-control" readonly="true" />
                                                                        <input type="hidden" name="uuid" value="{{$speakers->uuid}}" /> </div>
                                                        <div class="margiv-top-10">
                                                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                            <button type="submit" class="btn blue"> Save Changes </button>
                                                            <button type="reset" class="btn default"> Cancel </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="tab_2-2" class="tab-pane">
                                                    <form action="/change-speaker-photo" role="form" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <?php if(!empty($speakers->photo)) { ?>
                                                                    
                                                                        <img src="{{ $speakers->photo }}" alt="" />
                                                                        
                                                                    
                                                                <?php } ?>
                                                                     </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="file_photo"> 
                                                                        <input type="hidden" name="uuid" value="{{ $speakers->uuid }}">
                                                                        <input type="hidden" name="current_photo" value="{{ $speakers->photo }}">
                                                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                                    </span>
                                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix margin-top-10">
                                                                <span class="label label-danger"> NOTE! </span>
                                                                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top-10">
                                                            <input type="submit" class="btn btn-primary" name='submit_image' value="Unggah Photo" />
                                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
@endsection

@section('page-scripts')
        <script src="{{URL::asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
        <?php if($message == "success") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
        <?php } elseif ($message == "deleted") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
        <?php } ?>
        <script src="{{URL::asset('assets/pages/scripts/table-datatables-managed.js')}}" type="text/javascript"></script>
@endsection