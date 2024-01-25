@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>Woven Products</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>Woven Products</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
  <!---------------------- Breadcrumb End --------------------->

  <section>
        <div class="container">
            <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Woven Items</h3></div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/1.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Canvas Trouser </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/2.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Denim 3/4 </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/3.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Denim 3/4 </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/4.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Men’s Jacket</div>
                        </div>
                    </div>
            </div><br>
            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/5.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Twill Shorts</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/6.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Camo Print </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/7.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Twill Fabric </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/8.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Polyester Top & Cotton bottom </div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/9.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Denim men </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/10.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Denim Women</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/11.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100%cotton.13oz, Denim Men’s </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/woven/12.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Style: 1221, Description: Ladies Jean Pant, Content: 99% cotton, 1% Lycra, Wt: 9.5 oz</div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/woven/13.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Style: 1234, Description: 100% cotton, 11oz</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/woven/14.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Style: 2145, Description: 100% cotton,
                            4/1sateen, Weight: 8.5 oz, Enzyme wash.
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/woven/15.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Style: LFT 218, Description: 35/65 Cvc, Fabric yarn dyed </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/woven/16.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Style: LFT 231, Content: 97%
                            cotton,3 Spandex, Fabric: Yarn Dyed
                            </div>
                    </div>
                </div>
            </div><br>

            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/woven/17.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Style: DFL 02, Content: 65/35 PC,
                            Fabric: Yarn Dyed
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
