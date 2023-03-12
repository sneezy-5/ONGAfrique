@extends('base.socialeapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('social')



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
    Le social est un enjeu clé en Afrique, où les défis incluent la pauvreté, l'injustice sociale, la violence, la discrimination et l'exclusion sociale. Le développement social durable est essentiel pour améliorer le bien-être des populations africaines, et l'éducation peut jouer un rôle clé dans la promotion d'une société plus juste et plus inclusive.

L'éducation peut aider à renforcer la conscience sociale et à sensibiliser les populations aux défis sociaux. Les programmes éducatifs peuvent aider à promouvoir des valeurs telles que la tolérance, la solidarité, la diversité et le respect mutuel. Les individus éduqués sont également plus susceptibles de s'engager dans des activités sociales et de prendre des mesures pour résoudre les problèmes sociaux dans leur communauté.

L'éducation peut également aider à réduire les inégalités sociales en fournissant des opportunités égales d'apprentissage et de développement pour tous les individus, quels que soient leur origine, leur sexe ou leur situation socio-économique. Les programmes éducatifs peuvent aider à briser le cycle de la pauvreté en fournissant aux enfants issus de milieux défavorisés une éducation de qualité qui leur permettra de réussir sur le marché du travail et de contribuer à la société.

En outre, l'éducation peut jouer un rôle important dans la promotion de la santé mentale et du bien-être social. Les programmes éducatifs peuvent aider à renforcer les compétences sociales, les compétences en résolution de conflits et les compétences en gestion du stress, ce qui peut aider les individus à mieux faire face aux défis sociaux et à maintenir des relations positives avec les autres.

En conclusion, le développement social est un enjeu majeur en Afrique, et l'éducation peut jouer un rôle clé dans la promotion d'une société plus juste et plus inclusive. L'éducation peut aider à renforcer la conscience sociale, à réduire les inégalités sociales et à promouvoir la santé mentale et le bien-être social.
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
               
              @foreach ($sociales as $soc)
              <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$soc->image)}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$soc->image)}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                    <div class="p-4">
                      <h4 class="d-block h5 Titretrans">{{$soc->type}}</h4>
                      <span class="texttrans">{{$soc->type}}</span>
                    </div>
                    <a href="{{route('voirsociale', ['id'=>$soc->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
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