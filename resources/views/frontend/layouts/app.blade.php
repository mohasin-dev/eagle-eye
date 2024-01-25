<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eagle Eye Appreal') }}</title>

    <link rel="shortcut icon" href="{{asset('assets/frontend/img/favicon.png')}}">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome/css/fontawesome.min.css')}}">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap/bootstrap.min.css')}}">
    <!--animatation-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate/animate.css')}}">
    <!--magnific-popup-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup/magnific-popup.css')}}">
    <!--owl-carousel-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl-carousel/owl.theme.default.min.css')}}">
    <!--style css-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <!--style css-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style1.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>

    /* .dropdown:hover>.dropdown-menu {
    display: block; */
    }
    /* div.mydropdown{
    margin-top: 19px!important;
    border-radius: 0!important;
    background-color: #800!important;
    } */

    div.mydropdown a.dropdown-item:hover{
        background-color: #800!important;
        color: #fff!important;
    }
    .dropdown-item:first-child {
    border-top-left-radius: 0!important;
    border-top-right-radius: 0!important;
}
a.text-light:focus, a.text-light:hover {
    /* color: #cbd3da!important; */
    color: #800!important;
    background-color: #fff!important;
}
/* .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
} */
    /* .dropdown-menu.show a{
        color: #fff;
    } */
    /* .input-group{
        margin-top: -4px;
    } */
    .search-input{
    background: transparent;
    border: none;
    border-radius: 0;
    border: 2px solid #ddd;
    border-radius: 10px!important;
    transition: all .4s;
    color: #fff;

}
.search-input:focus{
    background: transparent;
    box-shadow: none;
    border: 2px solid #fff;
    /* border-bottom: 2px solid #dc3545; */
}
.search-button{
    /*border-radius: 50%;*/
    /*padding: 10px 16px;*/
    transition: all .4s;
    /*background: #ddd;*/
    /*margin-top: -2px;*/
    margin-left: -40px;
    cursor:pointer;
}
/*.search-button:hover{*/
/*    background-color: #eee;*/
/*    transform: translateY(-1px);*/
/*}*/
.nav .input-group input[type="text"], ::-webkit-input-placeholder{
    color: #fff!important;
  }

    .dropdown:hover>.dropdown-menu {
    display: block;
    }
    </style>
</head>
<body>
    <!--Header-->
    <header>
        {{-- <nav class="navbar navbar-expand-lg forToggleIcon forpadding">
            <a class="navbar-brand" href="{{route('home')}}">
                <h3 class="text-light">Eagle Eye Apparels</h3>
                <!-- <img src="{{asset('assets/frontend/img/logo.png')}}" style="max-height: 25px; margin-right: 20px;"> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.range')}}">Product Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>

                </ul>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-lg forToggleIcon forpadding">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('assets/frontend/img/e-logo.png')}}" style="max-height: 40px; width: 150px; margin-right: 20px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Sarch...">
                        <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-light"></i></button>
                    </div>
                </form>
                  <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    @endauth
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                      </a>
                      <div style="background-color: #800; margin-top: 0px; border-radius: 0; border:none; padding: 0;" class="dropdown-menu mydropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light mt-0" href="{{ route('knit.product') }}">Knit Product</a>
                        <a class="dropdown-item text-light" href="{{ route('woven.product') }}">Woven Product</a>
                        <a class="dropdown-item text-light" href="{{ route('safety.product') }}">Safety Ware Product</a>
                        <a class="dropdown-item text-light" href="{{ route('school.product') }}">School Items Product</a>
                        <a class="dropdown-item text-light mb-0" href="{{ route('fleece.product') }}">Fleece Items Product</a>
                      </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.range')}}">Product Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                  </ul>
                </div>
              </nav>
    </header><!--Header-->
    @yield('content')
    <!--footer-->
    <style>
    .pfm p{
        padding: 0;
        padding-bottom: 5px;
        font-weight: 500;
        margin: 0;
        color: #111;
        transition: all .4s;
        /* line-height: 1; */
    }
    .pfm p:hover{
        color: #800;
    }
    </style>
    <footer>
        <div id="main-footer" class="content-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                       <div class="f-info">
                           <h3 style="padding-bottom: 0; margin-bottom: 0;">Eagle Eye Apparels</h3><br>
                            <!-- <a href="#"><img class="footer-logo" src="{{asset('assets/frontend/img/logo.png')}}"></a> -->
                            <div id="footer-contact-info" style="font-size: 14px;"><!--footer-contact-->
                                {{-- <div id="phone-fax-email">
                                    <p style="padding: 0px 0; margin-bottom: 2px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;+88-01551555777</strong></p>
                                    <p style="padding: 0px 0;margin-bottom: 2px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;faruq@eagleeyeapparels.com</strong></p>
                                    <p style="padding: 0px 0;margin-bottom: 8px;"><strong>Web Mail&nbsp;&nbsp;&nbsp;:&nbsp;info@eagleeyeapparels.com</strong></p>
                                </div> --}}
                                <div class="row" style="margin-bottom: 8px;">
                                    <div class="col-md-4 pfm">
                                        <p>Mobile</p>
                                        <p>Email</p>
                                        <p>Web Mail</p>

                                    </div>
                                    <div class="col-md-8 pfm" style="margin-left: -35px;">
                                        <p>: +88-01551555777</p>
                                        <p>: faruq@eagleeyeapparels.com</p>
                                        <p>: <a style="text-decoration: none; color: #000" href="http://webmail.eagleeye.com">info@eagleeyeapparels.com</a></p>
                                    </div>
                                </div>
                                <ul class="footer-social-list">
                                    <li class="facebook"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-twitter"></i></a></li>
                                    <li class="pinterest"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li class="linkedin"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>

                            </div>
                       </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="main-footer-menu">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="{{route('quality.control')}}">Quality Control</a></li>
                                <li><a href="{{route('our.strength')}}">Our Strength</a></li>
                                <li><a href="{{route('operation')}}">Our Speciality</a></li>
                                <li><a href="{{route('our.concerns')}}">Our Concerns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="main-footer-menu">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="{{ route('knit.product') }}">Knit Products</a></li>
                                <li><a href="{{route('product.range')}}">Product Range</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="main-footer-menu">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="{{route('carrer')}}">Career</a></li>
                                <li><a href="{{route('privacy')}}">Privecy</a></li>
                                <li><a href="{{route('support')}}">Support</a></li>
                                <li><a href="{{route('terms')}}">Terms</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom-footer">
            <div class="container">
                <div class="row bf-into">
                    <div class="col-md-12">
                        <div id="footer-copyright">
                            <p class="text-center">Copyrights &copy; 2019 All Rights Reserved by <a class="intezie" style="color: aqua;" href="http://intezie.com" target="_blank">Intezie Limited</a></p>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 fb-menu d-none d-md-block">
                        <div id="bottom-footer-menu">
                            <ul>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Support Services</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <a id="back-to-top" class="btn btn-sm primary btn-back-to-top" href="#home" role="button" >
            <i class="fas fa-angle-up"></i>
        </a>

    </footer><!--footer-->

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!--proper js for bootstarp 4-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!--fontawesome-->
    <script src="{{asset('assets/frontend/js/fontawesome/fontawesome.min.js')}}"></script>
    <!--bootstrap-->
    <script src="{{asset('assets/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!--wow-->
    <script src="{{asset('assets/frontend/js/wow/wow.min.js')}}"></script>
    <!--magnific-popup-->
    <script src="{{asset('assets/frontend/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!--owl-carousel-->
    <script src="{{asset('assets/frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <!--waypoint for counter up-->
    <script src="{{asset('assets/frontend/js/counter/jquery.waypoints.min.js')}}"></script>
    <!--counter up-->
    <script src="{{asset('assets/frontend/js/counter/jquery.counterup.min.js')}}"></script>
    <!--custom js-->
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>

</body>
</html>
