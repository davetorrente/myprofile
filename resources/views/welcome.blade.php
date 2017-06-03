@extends('layouts.master')

@section('content')
        <!--========== SLIDER ==========-->
<div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{URL::to('src/img/cover1920.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="promo-block-divider">
                    <h1 class="promo-block-title">Dave <br/> Torrente</h1>
                    <p class="promo-block-text">Web Developer &amp; Cute</p>
                </div>
                <ul class="list-inline">
                    <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                    <li><a href="#" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                    <li><a href="#" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                    <li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>
                    <li><a href="#" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!--========== SLIDER ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- About -->
<div id="about">
    <div class="container content-lg">
        <div class="row">
            <div class="col-sm-3 sm-margin-b-30">
                <div class="text-right sm-text-left">
                    <h2 class="margin-b-0">Introduction</h2>
                    <p>What I am all about.</p>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-1">
                <div class="margin-b-60">
                    <p>Hi! I'm Dave Robert Estrada Torrente. I am a fresh graduate from Polytechnic University of the Philippines with a bachelor's degree in Computer Engineering.</p>
                    <p>I am highly adaptable and eager to learn new things to a fast pace environment. I am looking for a job that will challenge me and allow me to use my skills in software or hardware field in a way that
                        is mutually beneficial to myself and my employer for future growth and advancement.</p>
                    <p>Below are the list of my skills that makes me awesome!</p>
                </div>

                <!-- Progress Box -->
                <div class="progress-box">
                    <h5>PHP <span class="color-heading pull-right">60%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>HTML5 <span class="color-heading pull-right">80%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="96"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>JavaSript <span class="color-heading pull-right">70%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="52"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>Node JS <span class="color-heading pull-right">75%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>React JS <span class="color-heading pull-right">40%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>Jquery <span class="color-heading pull-right">60%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>

                <div class="progress-box">
                    <h5>MongoDB <span class="color-heading pull-right">80%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>

                <div class="progress-box">
                    <h5>MySQL <span class="color-heading pull-right">50%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>

                <div class="progress-box">
                    <h5>VB.Net <span class="color-heading pull-right">30%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div>
                <!-- End Progress Box -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End About -->

<!-- Experience -->
<div id="experience">
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Experience</h2>
                        <p>PHP Laravel - Intern</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-4 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>HTML5/CSS3</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                {{--<a href="#" class="content-wrapper-link"></a>--}}
                            </div>
                        </div>
                        <div class="col-md-4 md-margin-b-4">
                            <div class="service bg-color-base wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">PHP Laravel</h3>
                                    <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                {{--<a href="#" class="content-wrapper-link"></a>--}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Node JS</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                {{--<a href="#" class="content-wrapper-link"></a>--}}
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
</div>
<!-- End Experience -->

<!-- Work -->
<div id="work">
    <div class="container content-lg">
        <div class="row">
            <div class="col-sm-3 sm-margin-b-30">
                <div class="text-right sm-text-left">
                    <h2 class="margin-b-0">Works</h2>
                    <p>School works</p>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-1">
                <!-- Masonry Grid -->
                <div class="masonry-grid row row-space-2">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{URL::to('src/img/800x400/thesisIt.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{URL::to('src/img/397x400/teamProfile.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{URL::to('src/img/397x300/music.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{URL::to('src/img/397x300/music2.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{URL::to('src/img/397x300/todo.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Work -->

<!-- Contact -->
<div id="contact">
    <div class="bg-color-sky-light">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Contacts</h2>
                        <p>Hire me.</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h5>Location</h5>
                            <a href="#">Bulacan, Philippines</a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h5>Phone</h5>
                            <a href="#">+69 919 344 55 60</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Email</h5>
                            <a href="mailto:#">dave.torrente@gmail.com</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
</div>
<!-- End Contact -->
<!--========== END PAGE LAYOUT ==========-->
@endsection