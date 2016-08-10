@extends('halo.master-publicview')
@section('title', 'Laporan Rapat Kerja' )

@section('pagestyle')
        <link href="../assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
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
                                            <li><a href="{{ $document->url }}" target="_blank">{{ $document->title }}</a></li>
                                        @empty
                                        @endforelse
                                        </ul>
                                    </div>
                                    <!--<div class="blog-single-foot">
                                        <ul class="blog-post-tags">
                                            <li class="uppercase">
                                                <a href="javascript:;">Bootstrap</a>
                                            </li>
                                            <li class="uppercase">
                                                <a href="javascript:;">Sass</a>
                                            </li>
                                            <li class="uppercase">
                                                <a href="javascript:;">HTML</a>
                                            </li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </div
@endsection

@section('page-plugins')
        
@endsection

@section('page-scripts')

        
@endsection