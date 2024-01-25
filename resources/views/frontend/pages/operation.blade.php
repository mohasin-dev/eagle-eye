@extends('frontend.layouts.app')

@section('content')
<!---------------------- Breadcrumb Start --------------------->
<div class="breadcrumb">
    <div class="container">
      <h3>Our Speciality</h3>
      <div class="breadcrumb-ul-content">
        <ul class="breadcrumb-ul">
          <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
          <li>Our Speciality</li>
        </ul>
      </div>
    </div>
</div><br><br><br>
<!---------------------- Breadcrumb End --------------------->

<div class="container">
  <div class="text-center"><h1 style="color: #800">Our Speciality</h1></div><br><br>
  <div class="row">
    <div class="col-md-8 offset-2">
      <h5 class="text-center" style="padding: 10px; background: pink">Contact With Buyer</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Inquery Received</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Price Setup</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">MOU Signed</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Sample Program</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Sample Approved</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">L/C Received</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Commercial Documentation</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Production Follow-up</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Inspection</h5>
      <p class="text-center"><i class="fas fa-arrow-down fa-1x text-danger p-1"></i></p>
      <h5 class="text-center" style="padding: 10px; background: pink">Freight Forward</h5>
    </div>
  </div>
</div>


@endsection
