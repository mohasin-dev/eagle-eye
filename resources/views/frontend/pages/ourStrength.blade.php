@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb">
        <div class="container">
          <h3>Our Strength</h3>
          <div class="breadcrumb-ul-content">
            <ul class="breadcrumb-ul">
              <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
              <li>Our Strength</li>
            </ul>
          </div>
        </div>
    </div><br><br><br>
<div class="container">
        <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Prompt Response</h3></div>
    <div class="row">
        <div class="col-md-9">
            <div>
                <p>All customers are allocated a merchandiser who is responsible for all aspects of your order, from arranging the sampling to the final delivery of goods. Customers can therefore rest assured that whatever information they need, whether it’s about documentation, production or delivery, their merchandiser will be able to provide it instantly.</p>
            </div>
        </div>
        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/1.jpg')}}" style="height: 200px; width:100%;"></div>

    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Perfect Pricing</h3></div>

    <div class="row">
        <div class="col-md-6">
            <div>
                <p>At first we go for initial pricing as per the product description supplied by the buyer. Once we receive the approved/ original sample we go for in depth study in respect of pricing. Our pricing are well thought, perfect, logical and of course for successful delivery.</p>
            </div>
        </div>

        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/2.jpg')}}" style="height: 200px; width:100%;"></div>
        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/3.jpg')}}" style="height: 200px; width:100%;"></div>
    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Timely Sampling</h3></div>
    <div class="row">
        <div class="col-md-3">
            <div>
                <p>After price settlement we produce perfect sample as per buyer requirement. It will deliver in perfect materials, measurement and design. We work hard for supply sample in time.</p>
            </div>
        </div>
        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/4.jpg')}}" style="height: 200px; width:100%;"></div>
        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/5.jpg')}}" style="height: 200px; width:100%;"></div>
        <div class="col-md-3"><img src="{{asset('assets/frontend/img/strength/6.jpg')}}" style="height: 200px; width:100%;"></div>

    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Market Proven Products, Fabrics and Design</h3></div>
    <div class="row">
        <div class="col-md-12">
            <div><h3 style="color: #800;"></h3></div>
            <div>
                <p>Our specialist expertise covers ready-made garments for all ages. With product sourced from manufactures based in Bangladesh and other country also. We offer an enormous opportunity for variety and choice that is difficult if not impossible to obtain from others. We always maintain the quality of fabrics, trims and design as per the approval of our valued clients.</p>
            </div>
        </div>
        <div class="col-md-12"><img src="{{asset('assets/frontend/img/strength/7.jpg')}}" style="height: 200px; width:100%;"></div>
    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Consistency & Quality Assurance</h3></div>
    <div class="row">
        <div class="col-md-12">
            <div><h3 style="color: #800;"></h3></div>
            <div>
                <p>We have our own in-house Quality Control department that operates in all required stages of the work. We employ specialist inspectors to monitor and impose our stringent quality standards. At all time we maintain consistency in respect of quality of work, quality of fabrics, color, design and other materials.</p>
            </div>
        </div>
        <div class="col-md-12"><img src="{{asset('assets/frontend/img/strength/8.jpg')}}" style="height: 200px; width:100%;"></div>
    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Support Services</h3></div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <p>A full team of highly experienced support staff & logistics personnel ensure that our services and your orders always run smoothly and efficiently. With an efficient distribution operation system we ensure customers' stock is where it should be and when it should be.</p>
            </div>
        </div>
    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Personalized Processing</h3></div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <p>Where required we can offer a full in-house processing facility including bespoke ticketing, labeling and packaging. We can also generate and incorporate your own barcode requirements onto packaging or tickets etc. </p>
            </div>
        </div>
    </div><br>
    <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Production follow up & Timely Shipment</h3></div>
    <div class="row">
        <div class="col-md-8">
            <div>
                <p>We closely monitor with our highly experienced stuff after receiving order from our client such as yearn collection, knitting, dyeing, cutting ,embo, printing, sewing, finishing and shipment. With an efficient distribution operation system we ensure customers' stock is where it should be and when it should be.</p>
            </div>
        </div>
        <div class="col-md-4"><img src="{{asset('assets/frontend/img/strength/9.jpg')}}" style="height: 200px; width:100%;"></div>
    </div>
</div>

@endsection
