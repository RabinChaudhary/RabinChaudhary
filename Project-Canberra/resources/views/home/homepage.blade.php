@extends('layouts.app')
@section('title', 'homepage')
@section('content')
    @push('style')
        <style>
            .carousel-item {
                height: 32rem;
                background: black;
                color: white;
                position: relative;
                background-position: center;
                background-size: cover;
            }

            #carousel-container {
                position: absolute;
                bottom: 0;
                right: 0;
                left: 0;
                padding-bottom: 50px;
            }

            .overlay-image {
                position: absolute;
                bottom: 0;
                right: 0;
                left: 0;
                top: 0;
                opacity: 0.5;
            }

        </style>
    @endpush
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background:url({{ asset('img/data.jpg') }}); background-position: center;
                                    background-size: cover;"></div>
                <div class="container text-lg-start text-center" id="carousel-container">
                    <h1>Data Analytics</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur quisquam
                        necessitatibus
                        dolor
                        voluptatum magnam! Repudiandae fugit iusto quas aspernatur.</p>
                    <a href="{{url('/register')}}" class="btn btn-lg btn-primary">Register Today</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background:url({{ asset('img/web.jpg') }}); background-position: center;
                                background-size: cover;"></div>
                <div class="container text-lg-start text-center" id="carousel-container">
                    <h1>Web Development</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur quisquam
                        necessitatibus
                        dolor
                        voluptatum magnam! Repudiandae fugit iusto quas aspernatur.</p>
                    <a href="{{route('register')}}" class="btn btn-lg btn-primary">Register Today</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background:url({{ asset('img/cloud.jpg') }}); background-position: center;
                                background-size: cover;"></div>
                <div class="container text-lg-start text-center" id="carousel-container">

                    <h1>Cloud Computing</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur quisquam
                        necessitatibus
                        dolor
                        voluptatum magnam! Repudiandae fugit iusto quas aspernatur.</p>
                    <a href="#" class="btn btn-lg btn-primary">Register Today</a>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
            <span class="sr-only">Previous</span>
            <span class="carousel-control-prev-icon" area-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
            <span class="sr-only">Next</span>
            <span class="carousel-control-next-icon" area-hidden="true"></span>
        </a>
    </div>
    <section class="services my-2" style="min-height:max-content;">
        <div class="container fluid">
            <div class="row justify-content-center align-items-center pb-o">
                <div class="col-lg-6 col-12">
                    <div class="text-start pt-4">
                        <p style="color:orangered;">About Us</p>
                        <h1 class="fw-120" style="">Who we are</h1>
                        <p>We are an official Cloud Consulting Provider of Amazon web services & Cloud Consulting Company
                            working relentlessly on a mission of developing end-to-end product engineering and digital
                            transformation services to companies and startups across Europe and Asia by delivering utmost
                            and undaunted business & technical support to our esteemed clients, customers and stakeholders
                            with the expertise of our internationally certified engineers & business professionals.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="inner">
                        <img src="{{ asset('img/map.jpg') }}" style="background-position: center;
                        background-size: cover; max-width:100%; min-height:100%;" alt="australia map">
                    </div>
                </div>
            </div>


        </div>

    </section>

    <div class="section" style="background: pink; min-height:max-content;">
        <div class="container py-5">
            <div class="text-center pt-4">
                <p style="color:orangered;">Stories</p>
                <h1 class="fw-120" style="">Recent Blogs and Events</h1>
            </div>
            <div class="row g-3 mt-4 justify-content-space-around">
                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
                    <div class="card shadow-lg">
                        <div class="inner">
                            <img src="{{ asset('img/data.jpg') }}" alt="" class="card-img-top" />

                        </div>

                        <div class="card-body">

                            <h1 class="card-title">Data Analytics</h1>
                            <p class="card-text">
                                With utmost focus on customer success, we build end-to-end technology systems that help
                                businesses
                                grow and transform. We offer a full-scale digital ecosystem which includes World Class
                                software’s,
                                Cloud Platforms, Productivity & Collaboration Suites, Monitoring Tools, International
                                Payments
                                and
                                Startup Cloud Funding among others.
                                Our certified specialists and professional developers with their technical prowess and
                                business insights are here to work with you and make a positive different in organization’s
                                workflow and bottom line.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="card shadow-lg">
                        <div class="inner">
                            <img src="{{ asset('img/web.jpg') }}" alt="" class="card-img-top" />

                        </div>
                        <div class="card-body">
                            <h1 class="card-title">Web Development</h1>
                            <p class="card-text">
                                Empower your business by hiring manged IT services enabled by technology experts who drive
                                business
                                growth using modern tools as focus on critical business tasks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="card shadow-lg">
                        <div class="inner">
                            <img src="{{ asset('img/cloud.jpg') }}" alt="" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">Cloud and Consulation Services</h1>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque facilis accusantium dolor
                                nisi
                                reprehenderit expedita incidunt quibusdam illum atque quod!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
