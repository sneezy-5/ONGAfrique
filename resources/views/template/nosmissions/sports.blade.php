@extends('base.sportapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('sport')

     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
      <div>

        <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
            <div class="about-img">
              <img src="{{asset('styles/img/sport/spor (12).jpeg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Activités sportifs
        </h1>
    </div>
    <p class="fst-italic">
              Le sport , comme bon facteur de rassembleur, l'ONG Sourire D'Afrique s'engage à accompagner championnat et tournoi communautaire et scolaires là où besoin se fait sentir.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>C'est pourquoi, pour empêcher les congés scolaires anticipés pendant cette fin d'année, Le Président fondateur de l'ONG SOURIRE D'AFRIQUE,  M.Richard Gabdibé a eu l'honneur de parrainer le championnat de Hand-ball des collèges et lycée de Taabo.  Championnat qui s'étend sur 3 mois.</li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  


      <!-- Project Start -->
    <div class="container-xxl contentdefile bg-light">
        <div>
            <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
                <p class="fs-5 fw-medium text-primary">Nos Missions</p>
                <h1 class="display-5 mb-5">
                  Visitez nos activités sportifs"
                </h1>
            </div>
            <div class="owl-carousel project-carousel wow" data-aos="fade-up" data-aos-duration="2000">
               
            @foreach ($sports as $spo)
            <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$spo->image)}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$spo->image)}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>

                      </div>
                  </div>
                  <div class="p-4">
                    <h4 class="d-block h5 Titretrans">{{$spo->type}}</h4>
                    <span class="texttrans">{{$spo->type}}</span>
                  </div>
                  <a href="{{route('voirsport', ['id'=>$spo->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
              </div>
            @endforeach
             
  
            </div>
        </div>
    </div>
    <!-- Project End -->




  <!-- Video -->
  <div class="basic-2 ">
    <div>
        <div class="row m-0 p-0">
            <div class="col-lg">
              <div class="col-lg-12" data-aos="fade-down" data-aos-duration="2000">
                <h2 class="section-title text-light">Nos actualités</h2>
                <h3 class="section-sub-title text-light">Youtube</h3>
              </div>

                <!-- Video Preview -->
                <div class="image-container" data-aos="fade-up" data-aos-duration="2000">
                  <iframe class="container-fluid col-md" width="560" height="500" src="https://www.youtube.com/embed/8UiOxY4KuUs?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
    <!-- end of video -->




 
</div>

   <!--FIN CENTER-->
@endsection