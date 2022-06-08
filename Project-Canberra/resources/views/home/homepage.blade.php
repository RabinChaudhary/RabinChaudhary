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
                    <a href="{{ Route('register') }}" class="btn btn-lg btn-primary">Register Today</a>
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
                    <a href="{{ Route('register') }}" class="btn btn-lg btn-primary">Register Today</a>
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
                    <a href="{{ Route('register') }}" class="btn btn-lg btn-primary">Register Today</a>
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


    <section class="services" style="min-height:max-content; background-color:#6fa8dc; ">
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
                                                background-size: cover; max-width:100%; min-height:100%;"
                            alt="australia map">
                    </div>
                </div>
            </div>


        </div>

    </section>


    <div class="section" id="blogs" style="background:#ffd966;">
        <div class="container py-5">
            <div id="multi-item-example"  height="20vh;" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top d-flex gap-4 justify-content-center">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                            class="fas fa-chevron-left fs-5"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fas fa-chevron-right fs-5"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>


                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner d-sm-flex" role="listbox">

                    <!--First slide-->
                    <div class="row carousel-item active" style="background:transparent;">

                        <div class="col-md-4 col-12" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('img/web.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('img/cloud.jpg') }}" alt="Card image cap">
                                <div class="card-body d-md-block d-none">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('img/web.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Web Development</h4>
                                    <p class="card-text">Empower your business by hiring manged IT services enabled by
                                        technology experts who drive
                                        business
                                        growth using modern tools as focus on critical business tasks.</p>

                                </div>
                            </div>
                        </div>



                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                   
                    <!--/.Second slide-->

                    <div class="row carousel-item" style="background:transparent; overflow-y:scroll">
                        
                        @foreach($posts as $post)
                      
                        <div class="col-md-4 col-12" style="float:left">
                            <div class="card mb-2">
                                
                                    <img class="card-img-top"
                                        src="/storage/images/{{$post->image_path}}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-text">{{ $post->content }}</p>
                                        <cite  class="text-end">Author: <a class="btn btn-primary">{{ $post->person->name }}</a></cite  class="text-end">

                                    </div>
                                   
                            </div>
                           
                        </div>
                        @endforeach

                        @foreach($posts as $post)

                        <div class="col-md-4 col-12" style="float:left">

                            <div class="card mb-2">
                               
                                    <img class="card-img-top"
                                        src="/storage/images/{{$post->image_path}}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-text">{{ $post->content }}</p>
                                        <cite>Author: <a class="btn btn-primary">{{ $post->person->name }}</a></cite  class="text-end">
                                    </div>
                               
                            </div>
                           
                        </div>

                        @endforeach
                        @foreach($posts as $post)

                        <div class="col-md-4 col-12" style="float:left">

                            <div class="card mb-2">

                                    <img class="card-img-top"
                                        src="/storage/images/{{$post->image_path}}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-text">{{ $post->content }}</p>
                                        <cite  class="text-end">Author: <a class="btn btn-primary">{{ $post->person->name }}</a></cite  class="text-end">

                                    </div>
                       
                                    
                            </div>
                            
                        </div>
                        @endforeach

                    </div>



                </div>
                <!--/.Slides-->


            </div>
        </div>
    </div>



@endsection
