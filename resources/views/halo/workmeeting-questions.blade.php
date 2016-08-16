@extends('halo.master')
@section('title', 'Pertanyaan Raker' )

@section('pagestyle')
        <link href="{{URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/apps/css/todo.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Pertanyaan Raker</a>
                        </li>
@endsection

@section('content')
<div class="todo-container">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="todo-projects-container">
                                    <li class="todo-padding-b-0">
                                        <div class="todo-head">
                                            <button class="btn btn-square btn-sm green todo-bold">
                                                <a href="/add-workmeeting">
                                                Tambah Raker
                                                </a>
                                            </button>
                                            <h3>Rapat Kerja</h3>
                                        </div>
                                    </li>
                                    <div class="todo-projects-divider"></div>
                                    <li class="todo-projects-item todo-active">
                                        <h3 class="todo-blue">
                                            <a target="_blank" href="/show-workmeeting/{{ $workmeeting->uuid }}"> {{ $workmeeting->name }} </a>
                                            
                                        </h3>
                                        <p>{{ $workmeeting->description}}</p>
                                        <div class="todo-project-item-foot">
                                            <p class="todo-red todo-inline">
                                            Documents
                                            <ul>
                                            @forelse($workmeeting_document as $document)
                                                <li><a href="{{ $document->url }}" target="_blank">{{ $document->title }}</a></li>
                                            @empty
                                            @endforelse
                                            </ul>
                                            </p>
                                            <p class="todo-inline todo-float-r">Kirim
                                                <!--<a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>-->
                                                <a class="todo-add-button" href="/form-email/{{ $workmeeting->uuid }}" >+</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="todo-tasks-container">
                                    <div class="todo-head">
                                        <!--<button class="btn btn-square btn-sm red todo-bold" data-toggle="modal" href="#todo-task-modal">New Task</button>-->
                                        
                                        <button class="btn btn-square btn-sm red"><a class="btn btn-square btn-sm red todo-bold" href="/add-question/{{ $workmeeting->uuid }}">Pertanyaan Baru</a></button>
                                        <h3>
                                            <span class="todo-grey">Pertanyaan</span> Peserta</h3>
                                        <!--<p class="todo-inline">22 Members
                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                        </p>-->
                                    </div>
                                    <ul class="todo-tasks-content">

                                    @forelse($workmeeting_question as $question)

                                    	<li class="todo-tasks-item">
                                            <p class="todo-inline">
                                                <a data-toggle="modal" href="#todo-task-modal{{ $question->id }}">
                                                	{{ $question->question }}
                                                </a>
                                            </p>
                                            <p class="todo-inline todo-float-r">{{ $question->name }}
                                                <span class="todo-red">({{ $question->fraction }})</span>
                                            </p>
                                        </li>
                                    @empty
                                    @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse($workmeeting_question as $question)
                    <div id="todo-task-modal{{ $question->id }}" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <p class="todo-task-modal-title todo-inline">Penanya:
                                        <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">{{ $question->name }} ({{ $question->fraction }})</a>
                                    </p>
                                </div>
                                <div class="modal-body todo-task-modal-body">
                                    <p class="todo-task-modal-bg"><strong>{{ $question->question }}</strong></p>
                                    <p class="todo-task-modal-bg"> Tanggapan:<br />
{{ $question->answer }}
</p>
                                </div>
                                <div class="modal-footer">
                                     <a href="/delete-question/{{ $question->id }}/{{ $workmeeting->uuid }}" class="btn btn-danger" onclick="return confirmDelete();">Delete</a>
                                    <a href="/edit-question/{{ $question->id }}/{{ $workmeeting->uuid }}" class="btn btn-primary">Edit</a>
                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
@endsection

@section('page-plugins')
        <script src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}" type="text/javascript"></script>
@endsection

@section('page-scripts')
		<script src="{{URL::asset('assets/apps/scripts/todo.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
        <?php if($message == "success") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api.js')}}" type="text/javascript"></script>
        <?php } elseif ($message == "deleted") { ?>
        <script src="{{URL::asset('assets/pages/scripts/ui-alerts-api-deletemsg.js')}}" type="text/javascript"></script>
        <?php } ?>
        <script src="{{URL::asset('assets/pages/scripts/components-select2.js')}}" type="text/javascript"></script>
@endsection