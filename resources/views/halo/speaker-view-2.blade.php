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
                                                                <a href="javascript:;" class="profile-edit"> edit </a>
                                                            </li>
                                                        <?php } ?>
                                                <li>
                                                    <a href="javascript:;"> Sespri / TA </a>
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
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        <i class="fa fa-briefcase"></i> Kegiatan</th>
                                                                                    <th class="hidden-xs">
                                                                                        <i class="icon-paper-clip"></i> Berkas </th>
                                                                                    <th>
                                                                                        <i class="fa fa-calendar"></i> Tanggal Dikirim </th>
                                                                                    <th> </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="javascript:;"> Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri</a>
                                                                                    </td>
                                                                                    <td class="hidden-xs"> <a target="_blank" href="http://120.89.88.35/ehal/kompilasi/160608%20APBNP2016%20DAN%20PERSIAPAN%20IDUL%20FITRI-2.pptx">160608 APBNP2016 DAN PERSIAPAN IDUL FITRI-2.pptx</a></td>
                                                                                    <td> 10 Juni 2016
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="javascript:;">Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</a>
                                                                                    </td>
                                                                                    <td class="hidden-xs"><a target="_blank" href="http://120.89.88.35/ehal/kompilasi/160613 RANCANGAN APBN-P 2016 DAN RAPBN 2017-rev4.pptx">160613 RANCANGAN APBN-P 2016 DAN RAPBN 2017-rev4.pptx</a></td>
                                                                                    <td> 15 Juni 2016
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="javascript:;"> Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri </a>
                                                                                    </td>
                                                                                    <td class="hidden-xs"><a target="_blank" href="http://120.89.88.35/ehal/kompilasi/160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx">160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx</a></td>
                                                                                    <td> 23 Juni 2016
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="javascript:;">Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </a>
                                                                                    </td>
                                                                                    <td class="hidden-xs"><a target="_blank" href="http://120.89.88.35/ehal/kompilasi/160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx">160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx</a></td>
                                                                                    <td> 24 Juni 2016
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="javascript:;">Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </a>
                                                                                    </td>
                                                                                    <td class="hidden-xs"><a target="_blank" href="http://120.89.88.35/ehal/kompilasi/160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt">160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt</a></td>
                                                                                    <td> 29 Juni 2016
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                    </td>
                                                                                </tr>
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
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-user-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">  {{ $assistant->name }}
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
                                                    <form action="#" role="form">
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
                                                                        <input type="file" name="..."> </span>
                                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix margin-top-10">
                                                                <span class="label label-danger"> NOTE! </span>
                                                                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> Submit </a>
                                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="tab_3-3" class="tab-pane">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="control-label">Current Password</label>
                                                            <input type="password" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">New Password</label>
                                                            <input type="password" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Re-type New Password</label>
                                                            <input type="password" class="form-control" /> </div>
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> Change Password </a>
                                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="tab_4-4" class="tab-pane">
                                                    <form action="#">
                                                        <table class="table table-bordered table-striped">
                                                            <tr>
                                                                <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                <td>
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios1" value="option1" /> Yes
                                                                            <span></span>
                                                                        </label>
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios21" value="option1" /> Yes
                                                                            <span></span>
                                                                        </label>
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios31" value="option1" /> Yes
                                                                            <span></span>
                                                                        </label>
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios41" value="option1" /> Yes
                                                                            <span></span>
                                                                        </label>
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios41" value="option2" checked/> No
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!--end profile-settings-->
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> Save Changes </a>
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
        <script src="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
        <?php if($message == "success") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
        <?php } elseif ($message == "deleted") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
        <?php } ?>
        
@endsection