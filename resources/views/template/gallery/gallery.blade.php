@extends('base.galleryapp')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('gallery')
    


     <!--CENTER-->

     <div class="center row ">
    <hr>

    <section id="project-area" class="project-area pt-5" style="background-color:#F8F8F9;">
      <div  style="padding-top:100px;padding-bottom:100px;">
        <div class="row text-center" data-aos="fade-down" data-aos-duration="2000">
        <div class="col-lg-12">
          <h2 class="section-title">{{__("gallery")}}</h2>
          <h3 class="section-sub-title">{{__("projet")}}</h3>
        </div>
        </div>
        <!--/ Title row end -->
      
        <div class="row" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-12">
          <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">All
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">{{__("Education")}}
          </label>
          <label for="social">
            <input type="radio" name="shuffle-filter" id="social" value="social">{{__("Social")}}
          </label>
          <label for="sante">
            <input type="radio" name="shuffle-filter" id="sante" value="sante">{{__("Sante")}}
          </label>
          <label for="sport">
            <input type="radio" name="shuffle-filter" id="sport" value="sport">{{__("Sport")}}
          </label>
          <label for="socioeco">
            <input type="radio" name="shuffle-filter" id="socioeco" value="socioeco">{{__("Socio-économique")}}
          </label>
          <label for="culturel">
            <input type="radio" name="shuffle-filter" id="culturel" value="culturel">{{__("Culture")}}
          </label>
          </div><!-- project filter end -->
      
      
          <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
      
         @foreach ($education as $edu )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$edu->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$edu->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="">{{$edu->type}}</a>
              </h3>
              <p class="project-cat">{{$edu->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($sociale as $soc )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;sociale&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$soc->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$soc->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="#">{{$soc->type}}</a>
              </h3>
              <p class="project-cat">{{$soc->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($sante as $san )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;sante&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$san->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$san->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="#">{{$san->type}}</a>
              </h3>
              <p class="project-cat">{{$san->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($sport as $spo )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;sport&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$spo->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$spo->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="#">{{$spo->type}}</a>
              </h3>
              <p class="project-cat">{{$spo->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($economie as $eco )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;economie&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$eco->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$eco->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="#">{{$eco->type}}</a>
              </h3>
              <p class="project-cat">{{$eco->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($culture as $cul )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;culture&quot;]">
            <div class="project-img-container">
            <a class="gallery-popup" href=" {{asset('storage/image/'.$cul->image)}}" aria-label="project-img">
              <img class="img-fluid" src="{{asset('storage/image/'.$cul->image)}}" alt="project-img">
              <span class="gallery-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="#">{{$cul->type}}</a>
              </h3>
              <p class="project-cat">{{$cul->title_fr}}</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

        



          </div><!-- shuffle end -->
        </div>
      
      
        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
</section><!-- Project area end -->
  
  <!---newwww 33333-->

    <!-- Contact End -->



  </div>

     <!--FIN CENTER-->
@endsection