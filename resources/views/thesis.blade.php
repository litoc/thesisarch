@extends('layouts.main')

@section('main_container')
    <!-- Thesis Grid -->
    <section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Featured Thesis</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($allThesis as $thesis)
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
                        <h4>{{ str_plural($thesis['category']) }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('header').hide();
        });

    </script>
@endpush
