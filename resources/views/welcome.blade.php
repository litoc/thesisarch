@extends('layouts.main')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <!-- Thesis Grid -->
    <section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Featured Thesis</h2>
                    <h3 class="section-subheading text-muted">This is our list of thesis which our panel members found very promising.</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($featuredItems as $featuredItem)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>{{ str_plural($featuredItem) }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Announcements -->
    <section id="announcement">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Announcements</h2>
                    <h3 class="section-subheading text-muted">Get the latest information on your thesis class in this page.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <?php $count = 0; ?>
                        @foreach($announcements as $announcement)
                        <li class="{{ (++$count%2 === 0) ? 'timeline-inverted' : '' }}">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ date('Y-m-d', strtotime($announcement->created_at)) }}</h4>
                                    <h4 class="subheading">{{ title_case($announcement->subject) }}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> {{ ucfirst($announcement->description) }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="bg-faded" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">AMA Thesis Archive is a comprehensive repository of all published thesis at AMA Computer University.</h3>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
@endsection
