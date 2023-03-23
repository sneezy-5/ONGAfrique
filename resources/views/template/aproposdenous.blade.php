@extends('base.qsnapp')

@section('qsnapp')

     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
  <div>

    <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
      <div class="about-img">
      <img src="{{asset('styles/img/logo.jpeg')}}" alt="">
      </div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">{{__("plus")}}</p>
        <h1 class="display-5 ">
        {{__("ong")}}
        </h1>
    </div>
    <p class="fst-italic">
    {{__("textQuiSn")}}
  </p>
  <ul>
      <li><i class="bi bi-check-circle"></i>{{__("option1")}}</li>

      </ul>
  
    </div>
    </div>

  </div>
  </section><!-- End About Section -->
  
    <div class="card mb-4" style="width: 40rem;" data-aos="fade-up" data-aos-duration="2000">
      <h5 class="card-title text-dark  h2 m-0 mt-3" style="font-weight:700;">GABDIBE RICHARD</h5>
      <footer class="blockquote-footer mt-1">{{__("Stitre")}}</footer>
      
      <img src="{{asset('styles/img/président.jpg')}}" class="card-img-top w-100" alt="...">


    </div>



 
</div>

   <!--FIN CENTER-->

@endsection
