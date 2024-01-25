@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>Knit Products</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>Knit Products</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
  <!---------------------- Breadcrumb End --------------------->
  <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <p>We offer an exclusive collection of garments available in different fabrics; we arrange the finest range of collections at competitive prices. Available in unmatched designs and patterns, our array of products includes - Men's wear, Women's wear and Children's wear. We provide unique services to the foreign buyer's in procuring products of their choice and liking.</p>
                    </div>
                </div>
            </div><br><br>
            <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Knit Items</h3></div><br>
            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit1.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% cotton yarn dye</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit2.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100%cotton,S/J </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit3.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100 % polyester mash fabric </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit4.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Style: TXB 212, Fabric: 1X1
                                Rib 100% cotton, Embroidery, Print
                                </div>
                        </div>
                    </div>
            </div><br>
            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit5.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Style: PST 325, Fabric: Fleece 80%
                                cotton, 20 % polyester.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit6.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100 % cotton s/j</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit7.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100 % cotton s/j yarn dye </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit8.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">100% cotton s/j </div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit9.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">95% cotton, 5% elastan, s/j </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit10.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">95% cotton, 5% elastan, s/j yarn dye</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit11.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Yarn dyed, pique polo, gsm 200 </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit12.jpg')}}" style="height: 200px; width:100%;"></div>
                            <div class="card-footer">Slub fabric s/j</div>
                        </div>
                    </div>
            </div><br>

            <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit13.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Washed </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="{{asset('assets/frontend/img/knit/knit14.jpg')}}" style="height: 200px; width:100%;"></div>
                        <div class="card-footer">Polo</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
