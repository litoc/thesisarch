@extends('layouts.main')

@section('main_container')
    <!-- Thesis Grid -->
    <section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{ str_plural($category) }}</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row">
                @foreach ($allThesis as $thesis)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal{{ $thesis['id'] }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ empty($thesis->image)? asset('img/no-image-available.jpg') : url($thesis->image) }}" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>{{ str_plural($thesis['title']) }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
<!-- Portfolio Modal -->
@foreach ($allThesis as $thesis)
<div class="portfolio-modal modal fade" id="portfolioModal{{ $thesis['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>{{ $thesis['title'] }}</h2>
                            <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                            <img class="img-responsive img-centered" src="{{ empty($thesis->image)? asset('img/no-image-available.jpg') : url($thesis->image) }}" alt="">
                            <p>{{ $thesis['description'] }}</p>
                            <ul class="list-inline">
                                <li>Date: {{ $thesis['published_at'] }}</li>
                                <li>Created By: {{ $thesis['members'] }}</li>
                                <li>Category: {{ $category }}</li>
                                <li>Tags: {{ $thesis['tags'] }}</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('header').hide();
            $('nav#mainNav').addClass('navbar-shrink');
        });

    </script>
@endpush
