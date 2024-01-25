@extends('frontend.layouts.app')
@push('css')
<style>

</style>
@endpush
@section('content')
    <!--Home Slider-->
    <section id="home-slider">
        <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/frontend/img/knit4.jpeg')}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h1 class="home-heading text-light animated zoomIn">Knit Products</h1>
                        <p class="text-light animated zoomIn">The softness of knits makes them perfect for traveling, With athleisure becoming an incredibly popular trend, the comfort of knits has been brought back in style.</p><br>
                        <div id="home-btn" class="animated zoomIn">
                            <a class="btn btn-lg btn-general btn-white" href="{{ route('knit.product') }}" role="button">Read More</a>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/img/woven3.jpeg')}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="home-heading text-light wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">Woven Products</h1>
                            <p class="text-light wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">If you are creating clothing, woven fabrics are an excellent choice. Woven fabrics include denim, flannel, twill, satin, and more, and they are known for being high quality fabrics.</p><br>
                            <div id="home-btn" class="animated zoomIn">
                                <a class="btn btn-lg btn-general btn-white" href="{{ route('woven.product') }}" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/img/safety.jpeg')}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="home-heading text-light wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Safety Ware Products</h1>
                            <p class="text-light wow animated fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">PPE is equipment that will protect the user against health or safety risks at work. It can include items such as safety helmets, gloves, eye protection, high-visibility clothing, safety footwear and safety harnesses.</p><br>
                            <div id="home-btn" class="animated zoomIn">
                                <a class="btn btn-lg btn-general btn-white" href="{{ route('safety.product') }}" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/img/school.jpeg')}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="home-heading text-light wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">School Item Products</h1>
                            <p class="text-light wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">A school uniform teaches students to dress smartly and take pride in their appearance. Perhaps most importantly, a uniform means students don't have to worry about peer pressure when it comes to their clothes.</p><br>
                            <div id="home-btn" class="animated zoomIn">
                                <a class="btn btn-lg btn-general btn-white" href="{{ route('school.product') }}" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/img/fleece.jpeg')}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="home-heading text-light wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Fleece Item Products</h1>
                            <p class="text-light wow animated fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Fleece clothing includes fleece pants and fleece gilets but more commonly refers to fleece jackets and tops.</p><br>
                            <div id="home-btn" class="animated zoomIn">
                                <a class="btn btn-lg btn-general btn-white" href="{{ route('fleece.product') }}" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
    </section><!--Home Slider-->
    <!--Home-->
    <!--<section id="home">
        <div id="home-cover" class="bg-paralax animated fadeIn">
            <div id="home-content-box">
                <div id="home-content-box-inner">
                    <div id="home-heading" class="animated zoomIn">
                        <h3>Wathch Out<br>The Modern Responsive Website</h3>
                    </div>
                    <div id="home-btn" class="animated zoomIn">
                        <a class="btn btn-lg btn-general btn-white" href="#work" role="button">View Our Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--><!--Home-->
    <!--About-->
    <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div id="about-content-box" style="width: 100% !important">
                            <div id="about-content-box-outer">
                                <div id="about-content-box-inner">
                                    <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                        <h3> About Eagle Eye Appreal</h3>
                                        <div class="content-title-underline"></div>
                                    </div>
                                    <div id="about-desc"  class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                        <p><b>Eagle Eye Appreal</b> an apparel sourcing company located in Dhaka, Bangladesh, was established in view of growing demand of international buyers for supply of RHM.</p>
                                    </div>
                                    <div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <a class="btn btn-lg btn-general btn-black" href="{{ route('about') }}" role="button">More Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="about-bg-diagonal" class="col-md-8 bg-paralax"></div>
                </div>
            </div>
    </section><!--About-->
    <style>
    #serviceWidth .card .card-header{
        min-height: 80px!important;
        background: rgba(163, 0, 0, .9);
        box-shadow: 0px 10px 15px #ddd;
        transition: all .5s;
    }
    #serviceWidth .card .card-body{
       border: 1px solid rgba(163, 0, 0, .9);
       height: 160px;
    }
    #serviceWidth .card:hover .card-header{
        min-height: 80px!important;
        background: rgba(163, 0, 0, .9);
        box-shadow: 0px 15px 5px #ddd;
        transform: translateY(-10px);
    }
    #serviceWidth .card .card-header h3{
        color: #fff;
    }


    </style>
    <!--Services-->
    <section id="services">
        <div class="content-box pb-0">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Services </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container" id="serviceWidth">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fas fa-edit fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3 style="margin-top: 18px;">Prompt Response</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>All customers are allocated a merchandiser who is responsible for all aspects of your order, from arranging the sampling to the final delivery of goods.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fas fa-code fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3>Timely Sampling &  	Support Services</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>After price settlement we produce perfect sample as per buyer requirement. It will deliver in perfect materials, measurement and design. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fab fa-android fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3>Market Proven Products, Fabrics and Design</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>Our goal is to contribute towards garments sector in Bangladesh by exporting all kinds of RMG. We work hard for supply sample in time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fab fa-windows fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3>Consistency & Quality Assurance</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>Our specialist expertise covers ready-made garments for all ages. With product sourced from manufactures based in Bangladesh and other country also.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fas fa-laptop fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3 style="margin-top: 18px;">Personalized Processing</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>We have our own in-house Quality Control department that operates in all required stages of the work. We employ specialist inspectors to monitor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item card">
                            {{-- <div class="service-item-icon">
                                <i class="fab fa-apple fa-2x"></i>
                            </div> --}}
                            <div class="service-item-title card-header">
                                <h3>Production follow up & Timely Shipment</h3>
                            </div>
                            <div class="service-item-desc card-body">
                                <p>We closely monitor with our highly experienced stuff after receiving order from our client such as yearn collection, knitting, dyeing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Services-->
    <!--work-->
    <section id="work">
        <div class="content-box"  style="padding-bottom: 0;">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Product </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/9.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/9.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/10.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/10.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/11.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/11.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/16.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/16.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/5.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/5.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/6.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/6.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/17.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/17.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{asset('assets/frontend/img/product/19.jpg')}}" title="Word description goes here">
                                <img src="{{asset('assets/frontend/img/product/19.jpg')}}" class="img-fluid" alt="product">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Work-->
    <!--testimonial-->
    <section id="testimonial" style="margin-top: 60px;">
        <div id="testimonial-cover" class="bg-paralax">
            <div class="content-box">
                <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3>What People Say</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <div class="row wow animated bounceInDown" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="col-md-12">
                            <div id="customers-testimonial" class="text-center owl-carousel owl-theme">
                                <div class="testimonial">
                                    <img src="{{asset('assets/frontend/img/student/1.jpg')}}" class="img-fluid img-circle" alt="testimonial" style="border-radius: 50%;">
                                    <blockquote>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
                                    </blockquote>
                                    <div class="testimonial-author-name">
                                        <p>
                                            <strong>Mohasin Hossain</strong>
                                            <span>CEO & Founder - Google</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <img src="{{asset('assets/frontend/img/student/2.jpg')}}" class="img-fluid img-circle" alt="testimonial" style="border-radius: 50%;">
                                    <blockquote>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
                                    </blockquote>
                                    <div class="testimonial-author-name">
                                        <p>
                                            <strong>Mohasin Hossain</strong>
                                            <span>CEO & Founder - Facebook</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <img src="{{asset('assets/frontend/img/student/3.jpg')}}" class="img-fluid img-circle" alt="testimonial" style="border-radius: 50%;">
                                    <blockquote>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
                                    </blockquote>
                                    <div class="testimonial-author-name">
                                        <p>
                                            <strong>Mohasin Hossain</strong>
                                            <span>CEO & Founder - MH IT LTD</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--testimonial-->
    <!--client-->
    <section id="client">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Clients</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <div id="clients-list" class="owl-carousel owl-theme">
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/1.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/2.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/3.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/4.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/5.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/6.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/7.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/8.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/9.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/3.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/4.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/5.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/6.png')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{asset('assets/frontend/img/client/7.png')}}" class="img-fluid" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--client-->
    <!--why-choose-us-->
    <section id="why-choose-us">
        <div id="why-choose-us-cover" class="bg-paralax">
            <div class="content-box" style="background-color: rgba(33, 35, 49, 0.9);">
                <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3> Why Choose Us </h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <div class="row text-center wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="col-md-5">
                            <div class="why-choose-us-left">
                                <img src="{{asset('assets/frontend/img/3.png')}}" style="max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="why-choose-us-right">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Prompt Response</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Timely Sampling</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Market Proven Products</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Consistincy & Quality Assurance</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Support Service</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-item">
                                        {{-- <div class="why-choose-us-item-icon">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </div> --}}
                                        <div class="why-choose-us-item-title">
                                            <h3>Personalizesd Processing</h3>
                                        </div>
                                        <div class="why-choose-us-item-desc">
                                            <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--why-choose-us-->
    <!--subscribe-->
    <section id="subscribe">
    <div id="subscriber-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="subscriber-form text-center ">
                        <form class="align-middle">
                            <input type="email" placeholder="Your Email Here">
                            <input class="text-light" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!--subscribe-->
@endsection
