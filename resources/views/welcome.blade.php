@extends("base.homeapp")


@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('acceuil')

<!--CENTER-->





  <!--------header ajouter pour les mail-->

  <div class="center row">



    <!-- About Start -->
  <div class="container-xxl" style="padding-top:100px;padding-bottom:100px">
      <div class="container" style="background-color:rgb(255, 255, 255);">
          <div class="row">
              <div class="col-lg-6 wow" data-aos="fade-up" data-aos-duration="2000" style="visibility: visible; animation-delay: 0.1s;">
                  <div class="position-relative overflow-hidden h-100" style="min-height: 200px;">
                      <img class="position-absolute w-100 h-78 img-fluid" src="{{asset('styles/img/imgs/visite (5).jpeg')}}" alt="" style="object-fit: cover;">
                      <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{asset('styles/img/logo.jpeg')}}" alt="" style="width: 50px; height: 50px;">
                  </div>
              </div>
              <div class="col-lg-6 wow" data-aos="fade-down" data-aos-duration="2000" style="visibility: visible; animation-delay: 0.5s;">
                  <div class="h-100">
                      <div class="d-inline-block rounded-pill mt-3 bg-primary text-light py-1 px-3 mb-3">Qui Sommes Nous ?</div>
                      <h3 class=" text-dark mb-2">Ong Sourire d'afrique</h3>
                      <div class="bg-light border-bottom border-5 border-primary rounded p-2 mb-4">
                          <p class="text-dark mb-0">L'ONG SOURIRE D'AFRIQUE crée le 08 septembre 2022 à Taabo par son président Monsieur Richard GABDIBE résidant aux États-Unis fils et cadre de Taabo-Village à pour mission de venir en aide aux personnes vulnérables notamment : les veuves, les orphelins,les malades, les handicapés...</p>
                    
                          <span class="text-primary mt-2">Jhon Doe, Founder</span>
                      </div>

                      <a class="btn btnabout btn-primary btnprimaryabout" href="/aproposdenous">
                          Voir plus
                          <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ">
                              <i class="fa fa-arrow-right"></i>
                          </div>
                      </a>
                      <a class="btn btn-outline-primary btnoutlineprimaryabout" href="{{route('contact.index')}}">
                          Contactez-Nous
                          <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                              <i class="fa fa-arrow-right"></i>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- About End -->




<section class="section-padding pb-0" id="about" style="padding-top:100px!important;padding-bottom:100px!important; background-color:#F8F8F9;">
  <div class="row text-center">
    <div class="col-lg-12" data-aos="fade-up" data-aos-duration="2000">
      <h2 class="section-title">Nos actualites</h2>
      <h3 class="section-sub-title">Projets Recents</h3>
    </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-12 p-0" data-aos="fade-down" data-aos-duration="2000">      
              <img src="{{asset('styles/img/imgs/visite (10).jpeg')}}" class="img-fluid about-image" alt="">
          </div>

          <div class="col-lg-3 col-12 bg-dark" data-aos="fade-up" data-aos-duration="2000">  
              <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                  <h3 class="text-white mb-3">Don de matériels offert à Madame la sous-préfet de Taabo </h3>

                  <p class="text-secondary-white-color">Matériels Informatiques</p>

                  <div class="mt-3 custom-links">

                      <a href="{{route('actualites.index')}}" class="text-white custom-link">Voir actualité</a>
                  </div>

              </div>
          </div>

          <div class="col-lg-6 col-12 p-0 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">  
              <section id="myCarousel" class="carousel slide carousel-fade h-100 pointer-event" data-bs-ride="carousel">
                  <div class="carousel-inner h-100">
                      <div class="carousel-item h-100">
                          <img src="{{asset('styles/img/education/educ (13).jpeg')}}" class="img-fluid team-image h-100" alt="">

                          <div class="team-thumb bg-warning" style="text-align:start;">
                              <h3 class="text-white mb-0">Education</h3>

                              <a href="{{route('nosmissions.educations')}}" class="text-light mb-0">Voir Plus</a>
                          </div>
                      </div>

                      <div class="carousel-item h-100">
                          <img src="{{asset('styles/img/sante/san (7).jpeg')}}" class="img-fluid team-image" alt="">

                          <div class="team-thumb bg-primary" style="text-align:start;">
                              <h3 class="text-white mb-0">Santé</h3>

                              <a href="{{route('nosmissions.santes')}}" class="text-light mb-0">Voir Plus</a>
                          </div>
                      </div>

                      <div class="carousel-item h-100">
                          <img src="{{asset('styles/img/social/socia (2).jpeg')}}" class="img-fluid team-image" alt="">

                          <div class="team-thumb bg-success" style="text-align:start;">
                              <h3 class="text-white mb-0">Social</h3>

                              <a href="{{route('nosmissions.sociales')}}" class="text-light mb-0">Voir Plus</a>
                          </div>
                      </div>

                      <div class="carousel-item h-100">
                          <img src="{{asset('styles/img/sport/spor (8).jpeg')}}" class="img-fluid team-image" alt="">

                          <div class="team-thumb bg-info" style="text-align:start;">
                              <h3 class="text-white mb-0">Sport</h3>

                              <a href="{{route('nosmissions.sports')}}" class="text-light mb-0">Voir Plus</a>
                          </div>
                      </div>

                      <div class="carousel-item h-100 active">
                          <img src="{{asset('styles/img/imgs/visite (8).jpeg')}}" class="img-fluid team-image" alt="">

                          <div class="team-thumb bg-danger" style="text-align:start;">
                              <h3 class="text-white mb-0">Social</h3>

                              <a href="{{route('nosmissions.sociales')}}" class="text-light mb-0">Voir Plus</a>
                          </div>
                      </div>
                  </div>

            <div class="col-md m-3 bg-danger">
              <button class="btnavant carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="btnavant-icon carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Previous</span>
          </button>

                <button class="btnapres carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="btnapres-icon carousel-control-next-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Next</span>
                </button>
            </div>
              </section>

          </div>
      </div>
  </div>
</div>
</section>
<!---newwwwwwwwwwww-->





<!--newww 4-->


    <!-- Donate Start -->
    <div class="container-fluid bg-dark donate  w-100" data-parallax="scroll" data-image-src="{{asset('styles/img/culture/1.jpg')}}" style="background:linear-gradient(to left, #0332396b,#08363d),center/cover no-repeat url('../styles/img/2.jpg');background-attachment: fixed;">
      <div style="padding-top:100px;padding-bottom:100px">

          <div class="row  justify-content-center">
              <div class="col-lg-4 wow fadeIn mb-3" data-wow-delay="0.1s">
                  <div class="d-inline-block rounded-pill bg-light text-dark py-1 px-3 mb-3">Actualités</div>
                  <h1 class="display-6 text-white mb-5" data-aos="fade-up" data-aos-duration="2000">Visitez nos acitivités sur nos pages sociales</h1>
                  <p class="text-white-50 mb-0" data-aos="fade-up" data-aos-duration="2000">
                    Nous vous invitons à suivre nos actualités sur Facebook et Youtube pour être informé(e) rapidement de toutes nos nouveautés, promotions et événements. Grâce à nos pages, vous ne manquerez aucune annonce importante et pourrez également échanger avec notre communauté et partager vos expériences. Rejoignez-nous dès maintenant pour ne rien manquer !

                  </p>
              
                  <div class=" mt-3" data-aos="fade-up" data-aos-duration="2000">
                    <form action="{{route('newsletter.store')}}" method="post" enctype="multipart/form-data" class="formcenter">
                      @csrf
                      <h5 class="display-6 text-white">Abonnez-vous à notre newsletter</h5>
                      <p class="text-white-50">Et recevez des notifications sur nous</p>
                      <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="email" class="form-control newslettercenter" placeholder="Email address">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                      </div>
                    </form>
                  </div>
              
                </div>

              <div class="col-lg-6 wow" data-aos="fade-down" data-aos-duration="2000">
                <div class="d-inline-block rounded-pill bg-primary text-light py-1 px-3 mb-3">Nos Actualités Facebook</div>
                  <iframe class="container-fluid col-md d-flex justify-content-center align-items-center" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100086654464545&tabs=timeline&width=900&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="800" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                  <div class="d-inline-block rounded-pill bg-primary text-light py-1 px-3 ml-5 mb-3 mt-3">Nos Actualités Youtube</div>
                  <iframe class="container-fluid col-md" width="560" height="315" src="https://www.youtube.com/embed/8UiOxY4KuUs?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
          </div>
      </div>
  </div>
  <!-- Donate End -->






<!------newwwww 22222-->

<section id="project-area" class="project-area " style="background-color:#F8F8F9;">
      <div  style="padding-top:100px;padding-bottom:100px;">
        <div class="row text-center" data-aos="fade-down" data-aos-duration="2000">
        <div class="col-lg-12">
          <h2 class="section-title">Notre Gallery</h2>
          <h3 class="section-sub-title">Projet Recents</h3>
        </div>
        </div>
        <!--/ Title row end -->
      
        <div class="row" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-12">
          <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Voir
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Education
          </label>
          <label for="social">
            <input type="radio" name="shuffle-filter" id="social" value="social">Social
          </label>
          <label for="sante">
            <input type="radio" name="shuffle-filter" id="sante" value="sante">Santé
          </label>
          <label for="sport">
            <input type="radio" name="shuffle-filter" id="sport" value="sport">Sport
          </label>
          <label for="socioeco">
            <input type="radio" name="shuffle-filter" id="socioeco" value="socioeco">Soiaux économique
          </label>
          <label for="culturel">
            <input type="radio" name="shuffle-filter" id="culturel" value="culturel">Culturel
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach

         @foreach ($sociale as $soc )
         <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;social&quot;]">
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
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
                <a href="gallery.html">Don de matériels</a>
              </h3>
              <p class="project-cat">à Madame la sous-préfet</p>
              </div>
            </div>
            </div>
          </div><!-- shuffle item 1 end -->
             
         @endforeach<!-- shuffle item 6 end -->
          </div><!-- shuffle end -->
        </div>
      
        <div class="col-12 mt-3">
          <div class="general-btn text-center">
          <a class="btn btn-primary" href="{{route('gallery')}}">Voir Tous nos projets</a>
          </div>
        </div>
      
        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
</section><!-- Project area end -->

<!---newwww 33333-->



    <!-- Project Start -->
    <div class="container-xxl contentdefile">
      <div class="">
          <div class="text-center text-md-start pb-5 pb-md-0 wow" style="max-width: 500px;" data-aos="fade-down" data-aos-duration="2000">
              <p class="fs-5 fw-medium text-primary">Nos Missions</p>
              <h1 class="display-5 mb-5">
                Visitez nos missions à travers "Taabo-Village"
              </h1>
          </div>
          <div class="owl-carousel project-carousel wow" data-aos="fade-up" data-aos-duration="2000">
             
            <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{asset('styles/img/sante/5.jpg')}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/sante/5.jpg')}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.santes')}}"><i
                                  class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                    <a class="d-block h5" href="{{route('nosmissions.santes')}}">Santé</a>
                    <span>Visitez nos activités sanitaires</span>
                  </div>
              </div>

              <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{asset('styles/img/education/2.jpg')}}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/education/2.jpg')}}"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.educations')}}"><i
                                class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                  <a class="d-block h5" href="{{route('nosmissions.educations')}}">Education</a>
                  <span>Visitez nos activités Educatif</span>
                </div>
            </div>

            <div class="project-item mb-5">
              <div class="position-relative">
                  <img class="img-fluid" src="{{asset('styles/img/sport/4.jpg')}}" alt="">
                  <div class="project-overlay">
                      <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/sport/4.jpg')}}"
                          data-lightbox="project"><i class="fa fa-eye"></i></a>
                      <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.sports')}}"><i
                              class="fa fa-link"></i></a>
                  </div>
              </div>
              <div class="p-4">
                <a class="d-block h5" href="{{route('nosmissions.sports')}}">Sport</a>
                <span>Visitez nos activités Sportif</span>
              </div>
           </div>

              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{asset('styles/img/culture/4.jpg')}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/culture/4.jpg')}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.cultures')}}"><i
                                  class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                    <a class="d-block h5" href="{{route('nosmissions.cultures')}}">Culture</a>
                    <span>Visitez nos activités Culturelles</span>
                  </div>
              </div>
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{asset('styles/img/social/1.jpg')}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/social/1.jpg')}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.sociales')}}"><i
                                  class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                    <a class="d-block h5" href="{{route('nosmissions.sociales')}}">Social</a>
                    <span>Visitez  nos activités sociales</span>
                  </div>
              </div>
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{asset('styles/img/socioeconomique/2.jpg')}}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('styles/img/socioeconomique/2.jpg')}}"
                              data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('nosmissions.economies')}}"><i
                                  class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                    <a class="d-block h5" href="{{route('nosmissions.economies')}}">Socio-économique</a>
                    <span>Visitez nos activités Socio-économique</span>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- Project End -->


  </div>

     <!--FIN CENTER-->

@endsection