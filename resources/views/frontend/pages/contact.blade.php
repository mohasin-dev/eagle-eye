@extends('frontend.layouts.app')

@section('content')
    <!---------------------- Breadcrumb Start --------------------->
    <div class="breadcrumb">
        <div class="container">
          <h3>Contact Us</h3>
          <div class="breadcrumb-ul-content">
            <ul class="breadcrumb-ul">
              <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
    </div><br><br><br>
      <!---------------------- Breadcrumb End --------------------->

      {{-- <div class="container mt-20">
        <div class="row">
          <div class="col-md-4 contact-grid-4">
            <div class="contact-grid-4-content">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h4>ADDRESS</h4>
              <p> HOUSE # 15, ROAD # 22, BLOCK # C, SECTION # 10, MIRPUR, DHAKA-1216.</p>
            </div>
          </div>
          <div class="col-md-4 contact-grid-4">
            <div class="contact-grid-4-content">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <h4>CONTACT US</h4>
              <p>Tele: + 88-01511-400200</p>
            </div>
          </div>
          <div class="col-md-4 contact-grid-4">
            <div class="contact-grid-4-content">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <h4>EMAIL</h4>
              <p>faruq@eagleeyeapparels.com</p>
              <p>mostafiz@eagleeyeapparels.com</p>
            </div>
          </div>
         </div>
      </div><br><br><br> --}}

      <style>
      .con-p p{
        color: #000!important;
      }
      </style>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center"><h3  style="color: #800; font-weight: 600; padding: 20px; background:#ddd;">Dhaka Office</h3></div>
          </div><br><br>
          <div class="row con-p">
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                    <p class="text-center">Name: Wahiduzzaman Faruq</p>
                  </div>
                <div class="card-body text-center" style="height:150px;">
                  <p>Cell: (M) + 88-01551555777</p>
                  <p>E-mail : faruq@eagleeyeapparels.com, 555777bd@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                      <p class="text-center">Name: Major. Mostafizur Rahman (Retd)</p>
                    </div>
                  <div class="card-body text-center" style="height:150px;">
                    <p>Cell (M) + 88-0171-3424197,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + 88-0155-2466374</p>
                    <p>E-mail : mostafiz@eagleeyeapparels.com</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header">
                        <p class="text-center">Name: Tauss Ibne Wahid (Joy)</p>
                      </div>
                    <div class="card-body text-center" style="height:150px;">
                      <p>Cell (M) + 88-0191-3390091</p>
                      <p>E-mail : joy@eagleeyeapparels.com</p>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section><br><br><br>


      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.333168771021!2d90.3663662145032!3d23.806748892539304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d6f1d99d03%3A0xcd82050166bb03db!2sMirpur+10+Bus+Stopage!5e0!3m2!1sen!2sbd!4v1547816196226" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>


          <!--contact-->
    <section id="contact">
            <div id="contact-cover" class="bg-paralax content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="contact-left">
                                <h3>Eagle Eye Appreal</h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat
                                </p>
                                <div id="contact-info">
                                    <address>
                                       <strong>Head Office:</strong>
                                        <p>HOUSE # 15, ROAD # 22, BLOCK # C, SECTION # 10<br>MIRPUR, DHAKA-1216</p>
                                    </address>
                                    {{-- <div class="row" id="contact-phone-fax-email"><!--phone-fax-email-->
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-9">

                                        </div>
                                        <p><strong>Mobile: </strong><span>+ 88-01511-400200</span><br>
                                        <strong>Email: </strong><span>mostafiz@eagleeyeapparels.com</span><br>
                                        <span style="margin-left: 46px;">info@eagleeyeapparels.com</span>
                                    </p>
                                    </div> --}}
                                    <div class="row">
                                            <div class="col-md-3">
                                                <p style="letter-spacing: 1px;"><strong>Mobile</strong><br>
                                                <strong>Email</strong><br>
                                                <strong>Web Mail</strong></p>

                                            </div>
                                            <div class="col-md-9">
                                            <p style="margin-left: -50px; letter-spacing: 1px;">: +88-01551555777<br>
                                               : faruq@eagleeyeapparels.com<br>
                                               : info@eagleeyeapparels.com</p>
                                            </div>
                                    </div>
                                    <ul class="social-list ">
                                        <li class="facebook"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="twitter"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li class="linkedin"><a href="#" class="social-icon icon-white icon-footer"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="contact-right">
                                <h3>Contact Us</h3>
                                <form action="#" class="contact-form">
                                    <input type="text" name="name" placeholder="Full Name" class="form-control">
                                    <input type="email" name="email" placeholder="Email" class="form-control">
                                    <textarea rows="5" name="massege" placeholder="Message..." class="form-control"></textarea>
                                    <div class="send-btn">
                                        <a href="#" class="btn btn-lg btn-general btn-white" role="button">Send</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><!--contact-->
@endsection
