@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>Fleece Products</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>Fleece Products</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
  <!---------------------- Breadcrumb End --------------------->

  <section>
        <div class="container">
            <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Fleece Items</h3></div><br>
            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/1.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Polyester Micro Fleece</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/2.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Polyester Micro Fleece, Two Side Pocket.</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/3.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Polyester Micro Fleece</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/4.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Polyester Polar Fleece, 1/4 Front Zip, Two Zip Side Pocket.</div>
                        </div>
                    </div>
            </div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/5.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Polyester Micro Fleece</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/6.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">80% Cotton, 20% polyester, One Side Brush, Sweat Shirt.</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/7.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">80% Cotton, 20% polyester, One Side Brush, Kangaroo Pocket.2x1 Rib Calf & Hem.</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/8.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% Cotton, Slab Fabric, Kangaroo Pocket. Pocket.2x1 Rib Calf & Hem.</div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/fleece/9.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">80% Cotton, 20% polyester, One Side Brush, Kangaroo Pocket. 2x1 Rib Calf & Hem.</div>
                        </div>
                    </div>

            </div><br>
        </div>
    </section>

@endsection
