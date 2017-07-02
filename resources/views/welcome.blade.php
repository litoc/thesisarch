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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> 
                </div> 
            </div> 
            <div class="row"> 
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
                        <h4>Threads</h4> 
                        <p class="text-muted">Illustration</p> 
                    </div> 
                </div> 
                <div class="col-md-4 col-sm-6 portfolio-item"> 
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2"> 
                        <div class="portfolio-hover"> 
                            <div class="portfolio-hover-content"> 
                                <i class="fa fa-plus fa-3x"></i> 
                            </div> 
                        </div> 
                        <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt=""> 
                    </div> 
                    <div class="portfolio-caption"> 
                        <h4>Explore</h4> 
                        <p class="text-muted">Graphic Design</p> 
                    </div> 
                </div> 
                <div class="col-md-4 col-sm-6 portfolio-item"> 
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal3"> 
                        <div class="portfolio-hover"> 
                            <div class="portfolio-hover-content"> 
                                <i class="fa fa-plus fa-3x"></i> 
                            </div> 
                        </div> 
                        <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt=""> 
                    </div> 
                    <div class="portfolio-caption"> 
                        <h4>Finish</h4> 
                        <p class="text-muted">Identity</p> 
                    </div> 
                </div> 
                <div class="col-md-4 col-sm-6 portfolio-item"> 
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal4"> 
                        <div class="portfolio-hover"> 
                            <div class="portfolio-hover-content"> 
                                <i class="fa fa-plus fa-3x"></i> 
                            </div> 
                        </div> 
                        <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt=""> 
                    </div> 
                    <div class="portfolio-caption"> 
                        <h4>Lines</h4> 
                        <p class="text-muted">Branding</p> 
                    </div> 
                </div> 
                <div class="col-md-4 col-sm-6 portfolio-item"> 
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal5"> 
                        <div class="portfolio-hover"> 
                            <div class="portfolio-hover-content"> 
                                <i class="fa fa-plus fa-3x"></i> 
                            </div> 
                        </div> 
                        <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt=""> 
                    </div> 
                    <div class="portfolio-caption"> 
                        <h4>Southwest</h4> 
                        <p class="text-muted">Website Design</p> 
                    </div> 
                </div> 
                <div class="col-md-4 col-sm-6 portfolio-item"> 
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal6"> 
                        <div class="portfolio-hover"> 
                            <div class="portfolio-hover-content"> 
                                <i class="fa fa-plus fa-3x"></i> 
                            </div> 
                        </div> 
                        <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt=""> 
                    </div> 
                    <div class="portfolio-caption"> 
                        <h4>Window</h4> 
                        <p class="text-muted">Photography</p> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </section> 
    <!-- Announcements --> 
    <section id="announcement"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-lg-12 text-center"> 
                    <h2 class="section-heading">Announcements</h2> 
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> 
                </div> 
            </div> 
            <div class="row"> 
                <div class="col-lg-12"> 
                    <ul class="timeline"> 
                        <li> 
                            <div class="timeline-image"> 
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt=""> 
                            </div> 
                            <div class="timeline-panel"> 
                                <div class="timeline-heading"> 
                                    <h4>2009-2011</h4> 
                                    <h4 class="subheading">Our Humble Beginnings</h4> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> 
                                </div> 
                            </div> 
                        </li> 
                        <li class="timeline-inverted"> 
                            <div class="timeline-image"> 
                                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt=""> 
                            </div> 
                            <div class="timeline-panel"> 
                                <div class="timeline-heading"> 
                                    <h4>March 2011</h4> 
                                    <h4 class="subheading">An Agency is Born</h4> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> 
                                </div> 
                            </div> 
                        </li> 
                        <li> 
                            <div class="timeline-image"> 
                                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt=""> 
                            </div> 
                            <div class="timeline-panel"> 
                                <div class="timeline-heading"> 
                                    <h4>December 2012</h4> 
                                    <h4 class="subheading">Transition to Full Service</h4> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> 
                                </div> 
                            </div> 
                        </li> 
                        <li class="timeline-inverted"> 
                            <div class="timeline-image"> 
                                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt=""> 
                            </div> 
                            <div class="timeline-panel"> 
                                <div class="timeline-heading"> 
                                    <h4>July 2014</h4> 
                                    <h4 class="subheading">Phase Two Expansion</h4> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> 
                                </div> 
                            </div> 
                        </li> 
                        <li class="timeline-inverted"> 
                            <div class="timeline-image"> 
                                <h4>Be Part 
                                    <br>Of Our 
                                    <br>Story!</h4> 
                            </div> 
                        </li> 
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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> 
                </div> 
            </div> 
            <div class="row"> 
            </div> 
        </div> 
    </section> 
@endsection 