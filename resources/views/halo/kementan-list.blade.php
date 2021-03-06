@extends('halo.master')
@section('title', 'Data Kementan' )

@section('pagestyle')
        <link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="/home" class="active">Data Kementan</a>
                        </li>
@endsection

@section('content')
                                  <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase"> Daftar Kementan</span>
                                                </div>
                                                <!--<div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <!--<div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a href="/add-speaker/#tab_1_3">
                                                                  <button id="sample_editable_1_new" class="btn sbold green"> Tambah Kementan
                                                                    <i class="fa fa-plus"></i>
                                                                  </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="btn-group pull-right">
                                                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-print"></i> Print </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th> 
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Nama Pegawai Kementan </th>
                                                            <th> Email </th>
                                                            <th> Satuan Kerja </th>
                                                            <th> Actions </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse ($speakers as $speakers)
                                                    
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"><a href="">  {{ $speakers->name }}  </a></td>
                                                            <td width="40%" class="left">
                                                                <a href="">  {{ $speakers->email }}  </a> 
                                                            </td>
                                                            <td width="40%" class="left"> {{ $speakers->satker }}</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
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
                                                <em><a href="http://tandem.setjen.pertanian.go.id">Sumber : TANDEM SETJEN PERTANIAN</a></em>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
@endsection

@section('page-scripts')

        <script src="{{URL::asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/pages/scripts/table-datatables-managed.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            if (localStorage) {
              // LocalStorage is supported!
              console.log('LocalStorage is supported!');
              var kementan = localStorage.getItem('kementan');
              console.log(kementan);
            } else {
              // No support. Use a fallback such as browser cookies or store on the server.
              console.log('LocalStorage is Not supported!');
            }
        </script>
@endsection