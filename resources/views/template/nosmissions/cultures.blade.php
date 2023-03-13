@extends('base.cultureapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('culture')


     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
  <div>

    <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
      <div class="about-img">
      <img src="{{asset('styles/img/culture/7.jpg')}}" alt="">
      </div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Activités Culturelles
        </h1>
    </div>
    <p class="fst-italic">
    La culture est un élément essentiel de l'identité et de la diversité en Afrique. Elle peut prendre différentes formes, telles que la musique, la danse, la littérature, les arts visuels, la cuisine et bien d'autres encore. La culture est également un moteur important de l'économie, offrant des emplois et des opportunités pour les artistes et les créateurs.

Cependant, de nombreux obstacles peuvent limiter l'accès des populations africaines à la culture, notamment le manque d'éducation artistique, le manque d'infrastructures culturelles, les coûts élevés des événements culturels et la stigmatisation liée à certaines formes d'expression artistique.

L'éducation peut jouer un rôle important dans la promotion de la culture en Afrique. Une meilleure éducation peut aider à sensibiliser les populations aux avantages de la culture pour l'identité, la créativité et le bien-être. Les programmes éducatifs peuvent également aider à former des artistes et des créateurs qualifiés pour soutenir la création artistique locale.

En outre, l'éducation peut aider à améliorer l'accès aux infrastructures culturelles, telles que les salles de spectacle, les bibliothèques et les musées. Les programmes éducatifs peuvent également aider à surmonter les barrières linguistiques et culturelles en favorisant la compréhension mutuelle entre les différentes communautés.

Enfin, l'éducation peut également aider à promouvoir la diversité culturelle en Afrique en célébrant les différentes formes d'expression artistique et en encourageant l'échange et la collaboration entre les artistes et les communautés.

En conclusion, la culture est un élément important de l'identité et de la diversité en Afrique. L'éducation peut jouer un rôle crucial dans la promotion de la culture, en sensibilisant les populations aux avantages de la culture, en formant des artistes qualifiés et en améliorant l'accès aux infrastructures culturelles.
      </p>
      <ul>
      <li><i class="bi bi-check-circle"></i>Le Président fondateur M.Richard Gabdibé est le    Parrain de ce grand Festival qui réunit les fils et filles du département de Taabo autour d'un idéal commun.  Celui du vivre ensemble et de la cohésion sociale.</li>

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
               @foreach ($cultures as $cul)
                 
               
              <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$cul->image)}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$cul->image)}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                    <div class="p-4">
                      <h4 class="d-block h5 Titretrans">{{$cul->type}}</h4>
                      <span class="texttrans">{{Str::limit($cul->description_fr, 75)}}</span>
                    </div>
                    <a href="{{route('voirculture', ['id'=>$cul->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
                </div>

                @endforeach

                <!-- <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid imgtrans" src="{{('styles/img/culture/12.jpg')}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{('styles/img/culture/12.jpg')}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>

                      </div>
                  </div>
                  <div class="p-4">
                    <h4 class="d-block h5 Titretrans">Sport</h4>
                    <span class="texttrans">Visitez nos activités sanitaires</span>
                  </div>
                  <a href="description.html" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
              </div> -->

              <!-- <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid imgtrans" src="{{('styles/img/culture/9.jpg')}}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{('styles/img/culture/9.jpg')}}"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
                <div class="p-4">
                  <h4 class="d-block h5 Titretrans">Sport2</h4>
                  <span class="texttrans">Visitez nos activités sanitaires</span>
                </div>
                <a href="description.html" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
            </div> -->
  
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


