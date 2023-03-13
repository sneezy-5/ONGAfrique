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
        <p class="fs-5 fw-medium text-primary">plus qu'une ONG</p>
        <h1 class="display-5 ">
          Ong Sourire D'Afrique
        </h1>
    </div>
    <p class="fst-italic">
      ONG SOURIRE D'AFRIQUE</span> crée le 08 septembre 2022 à Taabo par son président Monsieur Richard GABDIBE résidant aux États-Unis fils et cadre de Taabo-Village à pour mission de venir en aide aux 
      personnes vulnérables notamment : les veuves, les orphelins,les malades, les handicapés... 
  </p>
  <ul>
      <li><i class="bi bi-check-circle"></i>L'ONG sourire d'Afrique est aussi en charge d' accompagner les jeunes et les femmes dans leurs projets entrepreneuriales 
          Nous intervenons dans le social, la santé, l'éducation,  les activités socio-économiques, culturelles et sportives </li>
      </ul>
    </div>
    </div>

  </div>
  </section><!-- End About Section -->
  
    <div class="card mb-4" style="width: 40rem;" data-aos="fade-up" data-aos-duration="2000">
      <h5 class="card-title text-dark  h2 m-0 mt-3" style="font-weight:700;">GABDIBE RICHARD</h5>
      <footer class="blockquote-footer mt-1">Président de l'ONG <cite title="Source Title">Sourire d'Afrique</cite></footer>
      
      <img src="{{asset('styles/img/président.jpg')}}" class="card-img-top w-100" alt="...">


    </div>



 
</div>

   <!--FIN CENTER-->

@endsection
