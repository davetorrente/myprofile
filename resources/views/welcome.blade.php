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
                                        <h3 class="margin-b-5">ThesisIT</h3>
                                        <span>A Website for 5th year CPE students' Theses in PUP</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>We built a website using Node JS, Express JS, REST, Jquery and MongoDB for the database. This website serves as the storage and referral to all the theses of 5<sup>th</sup> year students in Polytechnic University of the Philippines.</p>
                                                <p>Our theses collection consist of 96 entries.</p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> Francesca Villasanta</p>
                                                <p class="margin-b-5"><strong>Designers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Developers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Client:</strong> Professor Tria</p>
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
                                        <h3 class="margin-b-5">Our team's profile</h3>
                                        <span>Our team consists of two members: <br/> Francesca Villasanta and Me (Dave Torrente)</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Our team's profile consists of our personal webpages. We're also so called the 'Evil Geniuses' as an alias for our team because neither of us are evil nor geniuses.  </p>
                                                <p>This is our first module using bulma framework, Node JS and Express JS.</p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> Francesca Villasanta</p>
                                                <p class="margin-b-5"><strong>Designers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Developers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Client:</strong> Professor Tria</p>
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
                                        <h3 class="margin-b-5">Simple Web Services</h3>
                                        <span>It is just a basic web service</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>WE PLAY MUSIC is our second module which we will build a simple service about Music.</p>
                                                <p>Our services offered: Live Band, Live DJ and Production. It's just for viewing and no transaction.</p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> Francesca Villasanta</p>
                                                <p class="margin-b-5"><strong>Designers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Developers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Client:</strong> Professor Tria</p>
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
                                <img class="full-width img-responsive" src="{{URL::to('src/img/397x300/todo.png')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Todo App</h3>
                                        <span>It is a simple Todo App built in React Redux</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>You can organize things by using this todo app deployed in heroku.</p>
                                                <p>This project is made using Express JS, React Redux and MongoDB for the database.</p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Designers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Developers:</strong> Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Client:</strong> Professor Tria</p>
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
                                        <h3 class="margin-b-5">Simple Web Services</h3>
                                        <span>It is just a basic web service</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>WE PLAY MUSIC is our second module which we will build a simple service about Music.</p>
                                                <p>Our services offered: Live Band, Live DJ and Production. It's just for viewing and no transaction.</p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Project Leader:</strong> Francesca Villasanta</p>
                                                <p class="margin-b-5"><strong>Designers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Developers:</strong> Francesca Villasanta &amp; Dave Torrente</p>
                                                <p class="margin-b-5"><strong>Client:</strong> Professor Tria</p>
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