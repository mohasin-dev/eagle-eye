@extends('frontend.layouts.app')

@section('content')
    <div class="breadcrumb">
        <div class="container">
          <h3>Product Range</h3>
          <div class="breadcrumb-ul-content">
            <ul class="breadcrumb-ul">
              <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
              <li>Product Range</li>
            </ul>
          </div>
        </div>
    </div><br><br><br>
    <div><h1 style="color: #800;" class="text-center">Product Range</h1></div><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p>We offer an exclusive collection of garments available in different fabrics; we arrange the finest range of collections at competitive prices. Available in unmatched designs and patterns, our array of products includes - Men's wear, Women's wear and Children's wear. We provide unique services to the foreign buyer's in procuring products of their choice and liking.</p>
                </div>
            </div>
        </div><br><br>
        <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Knit Items</h3></div>
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

<section>
    <div class="container">
        <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Woven Items</h3></div>
        <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
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
        <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
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

        <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
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

        <div class="row wow animated fadeInLeft" data-wow-duration="3s" data-wow-delay=".5s">
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
                        4/3sateen, Weight: 8.5 oz, Enzyme wash.
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

        <div class="row">
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

<section>
    <div class="container">
        <div><h3 class="text-center" style="background-color: #ddd; color: #800; padding: 10px 0; margin: 15px 0;">Safety Ware</h3></div>
        <div class="row wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s">
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
