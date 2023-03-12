@extends('base.economiapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('economie')


 



     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
      <div>

        <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
            <div class="about-img">
              <img src="{{asset('styles/img/socioeconomique/1.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Activités Socio-économique
        </h1>
    </div>
    <p class="fst-italic">
    La socio-économie est l'étude des relations entre les facteurs sociaux et économiques, et de leur impact sur le bien-être des populations. En Afrique, les défis socio-économiques sont nombreux, notamment la pauvreté, le chômage, l'inégalité des revenus, la corruption et l'accès limité aux services de base tels que l'éducation et la santé.

L'éducation peut jouer un rôle clé dans la résolution de ces défis. En effet, une meilleure éducation peut aider à renforcer les compétences et les connaissances des individus, ce qui peut à son tour stimuler la croissance économique et réduire la pauvreté. Les programmes éducatifs peuvent également aider à promouvoir une plus grande égalité des chances en donnant aux individus les compétences nécessaires pour réussir sur le marché du travail.

En outre, l'éducation peut contribuer à la lutte contre la corruption. Les programmes éducatifs peuvent aider à sensibiliser les populations aux coûts élevés de la corruption, ainsi qu'à la nécessité d'un gouvernement transparent et responsable. Les individus éduqués sont également mieux équipés pour participer à la vie publique et pour demander des comptes aux responsables gouvernementaux.

Enfin, l'éducation peut aider à promouvoir une croissance économique durable en favorisant l'innovation et l'entrepreneuriat. Les programmes éducatifs peuvent aider à développer les compétences nécessaires pour créer de nouveaux produits et services, ainsi que pour gérer efficacement une entreprise.

En conclusion, la socio-économie est un enjeu important en Afrique, et l'éducation peut jouer un rôle clé dans la résolution des défis socio-économiques. L'éducation peut aider à renforcer les compétences et les connaissances des individus, à promouvoir une plus grande égalité des chances, à lutter contre la corruption et à favoriser une croissance économique durable.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Accorder des prêts aux associations et groupements biens structurés. </li>
      <li><i class="bi bi-check-circle"></i>Créer des projets au nom de L'ONG Sourire D'Afrique.
      </li>
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
                  Visitez nos activités Sociales"
                </h1>
            </div>
            <div class="owl-carousel project-carousel wow" data-aos="fade-up" data-aos-duration="2000">
               
             @foreach ($economies as $eco )
             <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$eco->image)}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$eco->image)}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                    <div class="p-4">
                      <h4 class="d-block h5 Titretrans">{{$eco->type}}</h4>
                      <span class="texttrans">{{$eco->description_fr}}</span>
                    </div>
                    <a href="{{route('coireconomie', ['id'=>$eco->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
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