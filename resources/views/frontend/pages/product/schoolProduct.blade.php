@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>School Products</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>School Products</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
  <!---------------------- Breadcrumb End --------------------->
  <section>
        <div class="container">
            <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">School Items</h3></div><br>
            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/1.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Art Smock</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/2.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Jacket Fleece</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/3.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Legging</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/4.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Long Pant Twill</div>
                        </div>
                    </div>
            </div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/5.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Polo Shirt</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/6.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Polo Long Shirt</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/7.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Rain Coat</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/8.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Rain Pant</div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/9.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Shorts Twill</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/10.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Toque</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/11.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">T-shirt-Crew Neck</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/school/12.png')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Tunic Fleece</div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/school/13.png')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Tunic Twill</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/school/14.png')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Vest Fleece</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
