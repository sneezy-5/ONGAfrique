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
        <p class="fs-5 fw-medium text-primary">{{__("Nosmissions")}}</p>
        <h1 class="display-5 ">
        {{__("titreeco")}}
        </h1>
    </div>
    <p class="fst-italic">
    {{__("description6")}}
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>{{__("option6")}} </li>
      <li><i class="bi bi-check-circle"></i>{{__("option7")}}
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
                <p class="fs-5 fw-medium text-primary">{{__("Nosmissions")}}</p>
                <h1 class="display-5 mb-5">
                {{__("titreeco")}}
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
                      <h4 class="d-block h5 Titretrans">{{$eco->title_fr}}</h4>
                      <span class="texttrans">{{Str::limit($eco->description_fr,75)}}</span>
                    </div>
                    <a href="{{route('voireconomie', ['id'=>$eco->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> {{__("Voir")}}</a>
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
                <h2 class="section-title text-light">{{__("NosActualite")}}</h2>
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