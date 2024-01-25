@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>About Us</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>About Us</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
<!---------------------- Breadcrumb End --------------------->

  <!---------------------- About us section Start --------------------->
<div class="container mb-40">
    <div class="row">
      {{-- <div class="col-md-4 about-left"><img style="height: 50vh" src="{{asset('assets/frontend/img/bg-10.jpg')}}"></div> --}}
      <div class="col-md-12 about-right">
        <h5 style="color: #800">ABOUT Eagle Eye Apparels</h5>
        <p>The garment industry of Bangladesh has been the key export division and a main source of foreign exchange for about last 25 years. The industry provides employment to about 3 million workers of whom 80% are women. This sector is entirly export oriendent and is composed of over 5000 units - most working for international buyers, some owened by international companies. Our labor cost is low and workers are traditionally loyal and creative. As such many countries want to collect Ready Made Garments(RHM) products from Bangladesh.</p><br>
        <p><b>Eagle Eye Appreal</b> - an apparel sourcing company located in Dhaka, Bangladesh, was established in view of growing demand of international buyers for supply of RHM. With the experience of over 15 years in the field of apparels, the company has developed a strong sourcing network specially in Asia for garments products. We now cater to a diverse customer base accross Europe, America and Australia to provide  a wide range of garments as well as quality control services. Our goal is to contribute towards garments sector in Bangladesh by exporting all kinds of RMG to meet the need of changing trend fashion and also to play a vital role for diversification in productions.</p><br>
        <p><b>Eagle Eye Appreal</b> - developes a strategy as unique as the client, and then ensures that the linkages and relationships are not only monitored to meet performence over time. We always apply TQM(Total quality Management) system utilizing the finest & extraordinary vision of <b>Eagle Eye</b>. Apart from core services that are specific to orders placed, Eagle Eye also invests it's time and resources in nurturing continious improvment in process, people and product. This is why relationships developed by <b>Eagle Eye</b> last a lifetime.</p>
      </div>
    </div>
  </div>
<!---------------------- About us section End --------------------->

<!--------------- Company Feature Start------------------------------------->
{{-- <div class="feature mt-40">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-4">
          <div class="feature_icon">
            <div class="left_icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <div class="right_icon">
              <h3>FREE SHIPPING</h3>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-4">
          <div class="feature_icon">
            <div class="left_icon">
              <i class="fa fa-headphones" aria-hidden="true"></i>
            </div>
            <div class="right_icon">
              <h3>24/7 SUPPORT</h3>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-4">
          <div class="feature_icon">
            <div class="left_icon">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </div>
            <div class="right_icon">
              <h3>MONEY BACK GUARANTEE</h3>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
<!--------------------- Company feature end --------------->
@endsection
