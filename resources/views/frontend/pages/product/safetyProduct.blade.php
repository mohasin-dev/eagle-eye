@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>Safety Products</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>Safety Products</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
  <!---------------------- Breadcrumb End --------------------->
  <section>
        <div class="container">
            <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Safety Ware</h3></div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/1.png')}}" style="height: 200px; width:100%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/2.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/3.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/4.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
            </div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/5.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/6.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/7.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/8.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/9.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/10.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/safety/11.png')}}" style="height: 200px; width:100%;"></div>

                        </div>
                    </div>

            </div><br>
        </div>
    </section>
@endsection
