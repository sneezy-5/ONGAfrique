@extends('base.santeapp')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('sante')





<!--CENTER-->

<div class="center row">


<section id="about" class="about">
  <div>

    <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
      <div class="about-img">
      <img src="{{asset('styles/img/sante/san (7).jpeg')}}" alt="">
      </div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Activités Sanitaires
        </h1>
    </div>
    <p class="fst-italic">
    La santé est un élément fondamental de notre bien-être et de notre qualité de vie. Elle est influencée par divers facteurs, notamment notre environnement, notre alimentation, notre activité physique et notre accès aux soins de santé. En Afrique comme dans le reste du monde, la santé est un enjeu majeur et souvent liée à l'accès à l'éducation.

Malgré les avancées récentes dans le domaine de la santé, les défis restent nombreux. La pauvreté, le manque d'infrastructures de santé adéquates, le manque de ressources humaines qualifiées, la malnutrition et les maladies infectieuses continuent de mettre en péril la santé de millions de personnes en Afrique. Les femmes et les enfants sont particulièrement vulnérables, en raison notamment de la prévalence élevée de la mortalité maternelle et infantile.

L'accès à des soins de santé de qualité est un élément clé pour améliorer la santé en Afrique. Cependant, de nombreux obstacles limitent l'accès aux soins, notamment l'éloignement géographique des centres de santé, les coûts élevés des traitements, les barrières linguistiques et culturelles, ainsi que les préjugés et la stigmatisation liés à certaines maladies.

L'éducation peut jouer un rôle important dans l'amélioration de la santé en Afrique. En effet, une meilleure éducation peut aider à sensibiliser les populations à l'importance d'une bonne hygiène de vie, de la prévention des maladies et de l'accès aux soins de santé. Les femmes éduquées sont également plus susceptibles de prendre soin de leur propre santé et de celle de leur famille, en veillant à ce que leurs enfants reçoivent les soins nécessaires et en adoptant des pratiques saines au quotidien.

En conclusion, la santé est un enjeu majeur en Afrique, et l'accès à des soins de santé de qualité reste un défi majeur. Cependant, l'éducation peut jouer un rôle important dans l'amélioration de la santé, en sensibilisant les populations aux enjeux de la santé et en permettant aux individus de prendre des décisions éclairées en matière de soins de santé.
      </p>
      <ul>
      <li><i class="bi bi-check-circle"></i>Pour nous, l'hygiène sanitaire doit être une priorité commune.</li>

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
                  Visitez nos activités Sanitaires"
                </h1>
            </div>
            <div class="owl-carousel project-carousel wow" data-aos="fade-up" data-aos-duration="2000">
               
              @foreach ($santes as $san)
              <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$san->image)}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$san->image)}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                    <div class="p-4">
                      <h4 class="d-block h5 Titretrans">{{$san->type}}</h4>
                      <span class="texttrans">{{ str::limit($san->description_fr, 75)}}</span>
                    </div>
                    <a href="{{route('voirsante', ['id'=>$san->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
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
                  <iframe class="container-fluid col-md" width="560" height="500" src="https://www.youtube.com/embed/jD70pYIKLl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                  
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