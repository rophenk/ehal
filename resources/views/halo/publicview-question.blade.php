@extends('halo.master-publicview')
@section('title', 'Laporan Rapat Kerja' )

@section('pagestyle')
        <link href="{{URL::asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/pages/css/faq.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Laporan Rapat Kerja</a>
                        </li>
@endsection

@section('content')
					<div class="blog-page blog-content-2">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="blog-single-content bordered blog-container">
                                    <div class="blog-single-head">
                                        <h1 class="blog-single-head-title">{{ $workmeeting->name }}</h1>
                                        <div class="blog-single-head-date">
                                            <i class="icon-calendar font-blue"></i>
                                            <a href="javascript:;">{{ $date }}</a>
                                        </div>
                                    </div>
                                    <!--<div class="blog-single-img">
                                        <img src="../assets/pages/img/background/4.jpg" /> </div>-->
                                    <div class="blog-single-desc">
                                    <p>
                                        {{ $workmeeting->description }}
                                    </p>
                                    <hr />
                                        <h5>Dokumen</h5>
                                        <ul>
                                        @forelse($workmeeting_document as $document)
                                            @if($document->type === "question")
                                            <li><a href="{{ $document->url }}" target="_blank">{{ $document->title }}</a></li>
                                            @endif
                                        @empty
                                        @endforelse
                                        </ul>
                                    </div>
                                </div>
                                
                                    
                        </div>
                            
                    </div>
                    <div class="faq-page faq-content-1">
                        <div class="faq-content-container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="faq-section bordered">
                                        <h2 class="faq-title uppercase font-blue">Pertanyaan Rapat Kerja</h2>
                                        <div class="panel-group accordion faq-content" id="accordion1">
                                            @forelse($workmeeting_question as $question)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <span class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion{{ $question->id }}" href="#collapse_{{ $question->id }}">{{ $question->question }}</a>
                                                    </span>
                                                </div>
                                                <div id="collapse_{{ $question->id }}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p align="right"> {{ $question->name }} - {{ $question->fraction }}</p>
                                                        <p> {{ $question->answer }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('page-plugins')
        
@endsection

@section('page-scripts')

        
@endsection