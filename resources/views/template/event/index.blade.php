@extends('base.activiteapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('activite')

     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
  <div>

    <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
      <div class="about-img">
      <img src="{{asset('styles/img/adhesion.jpg')}}" alt="">
      </div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Nos Activités 
        </h1>
    </div>
    <p class="fst-italic">
      L'ONG SOURIRE D'AFRIQUE crée le 08 septembre 2022 à Taabo par son président Monsieur Richard GABDIBE résidant aux États-Unis fils et cadre de la Côte d'Ivoire à pour mission de venir en aide aux personnes vulnérables notamment : les veuves, les orphelins,les malades, les handicapés... 
      </p>
      <ul>
      <li><i class="bi bi-check-circle"></i>Accorder des prêts aux associations et groupements biens structurés. 
      </li>
      <li><i class="bi bi-check-circle"></i>Créer des projets au nom de L'ONG Sourire D'Afrique.
      </li>
      </ul>
    </div>
    </div>

  </div>
  </section><!-- End About Section -->
  


 <!-- Project social -->
    <div class="container-xxl contentdefile bg-light">
        <div>
            <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
                <p class="fs-5 fw-medium text-primary">Nos Missions</p>
                <h1 class="display-5 mb-5">
                  Visitez nos activités Sociales"
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
                      <span class="texttrans">{{Str::limit($soc->description_fr,75)}}</span>
                    </div>
                    <a href="{{route('voirsociale', ['id'=>$soc->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
                </div>
              @endforeach

            </div>
        </div>
    </div>
    <!-- Project End -->

<!-- Project educ -->
 <div class="container-xxl contentdefile bg-light">
              <div>
                  <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
                      <p class="fs-5 fw-medium text-primary">Nos Missions</p>
                      <h1 class="display-5 mb-5">
                        Visitez nos activités Educatives"
                      </h1>
                  </div>
                  <div class="owl-carousel project-carousel wow" data-aos="fade-up" data-aos-duration="2000">
                     
                  @foreach ($educations as $edu)
             <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid imgtrans" src="{{asset('storage/image/'.$edu->image)}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('storage/image/'.$edu->image)}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                    <div class="p-4">
                      <h4 class="d-block h5 Titretrans">{{$edu->type}}</h4>
                      <span class="texttrans">{{$edu->description_fr}}</span>
                    </div>
                    <a href="{{route('voireducation', ['id'=>$edu->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
                </div>
             @endforeach
    
                  </div>
              </div>
  </div>
   <!-- Project End -->


<!-- Project sanitaire -->
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
                      <span class="texttrans">{{$san->type}}</span>
                    </div>
                    <a href="{{route('voirsante', ['id'=>$san->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
                </div>
              @endforeach

    </div>
</div>
</div>
<!-- Project End -->     



<!-- Project Sport -->
<div class="container-xxl contentdefile bg-light">
<div>
    <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 mb-5">
          Visitez nos activités Sportives"
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


<!-- Project culture -->
<div class="container-xxl contentdefile bg-light">
<div>
    <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 mb-5">
          Visitez nos activités Culturelles"
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
                         <span class="texttrans">{{$cul->description_fr}}</span>
                       </div>
                       <a href="{{route('voirculture', ['id'=>$cul->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
                   </div>
   
                   @endforeach

       

      

    </div>
</div>
</div>
<!-- Project End -->


<!-- Project eco -->
<div class="container-xxl contentdefile bg-light">
<div>
    <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 mb-5">
          Visitez nos activités Socio-économiques"
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


 
</div>

   <!--FIN CENTER-->
 

@endsection()