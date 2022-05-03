@extends('layouts.app')
@section('title', 'homepage')
@section('content')
    <div class="section bg-secondary">
        <div class="container">
            <div class="row g-3 my-4">
                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
                    <div class="card border-0">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="card-img" />
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
                    <div class="card">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="card-img-top" />
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
                    <div class="card">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="card-img-top" />
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
