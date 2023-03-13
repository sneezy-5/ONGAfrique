@extends('base.educationapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('education')


     <!--CENTER-->

     <div class="center row">


<section id="about" class="about">
      <div>

        <div class="row m-0 p-0 d-flex justify-content-center align-items-center">
          <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="2000">
            <div class="about-img">
              <img src="{{asset('styles/img/education/educ (13).jpeg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-down" data-aos-duration="2000">
      <div class="text-center text-md-start pb-3 pb-md-0 wow" style="max-width: 500px;" >
        <p class="fs-5 fw-medium text-primary">Nos Missions</p>
        <h1 class="display-5 ">
          Activités Educatifs
        </h1>
    </div>
    <p class="fst-italic">
    L'éducation des filles est une priorité en Afrique et dans le reste du monde, car les femmes sont souvent considérées comme des charges et victimes de discrimination. Cependant, les progrès réalisés ces dernières années ont été inégaux, en particulier dans les zones rurales et périphériques des villes, où les résultats ne sont pas satisfaisants. Les raisons de cette sous-scolarisation des filles sont multiples, notamment le manque de moyens, car l'école publique n'est jamais totalement gratuite, et les frais d'inscription et d'uniformes peuvent être un obstacle. De plus, lorsque l'école est située à une distance considérable et qu'il peut être dangereux pour une fille de s'y rendre à pied, les parents préfèrent la garder à la maison plutôt que de l'exposer à des violences telles que l'enlèvement et le viol. En conséquence, une femme instruite peut jouer un rôle crucial pour encourager l'éducation de ses enfants et transmettre ses connaissances à sa famille.

            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Les filles sont sous-représentées dans l'éducation, ne représentant que 30% des enfants scolarisés dans le monde. Environ 900 millions de personnes analphabètes sont recensées, dont les deux tiers sont des femmes.</li>
              <li> Au Cambodge, 30% des femmes sont illettrées, contre 15% des hommes. Dans les zones rurales, plus de 65% des femmes travaillent sans être rémunérées pour leurs activités agricoles, tandis que 40% d'entre elles rencontrent des difficultés pour accéder aux soins médicaux.</li>
              <li>Les enfants dont les mères sont capables de lire ou d'écrire ont 50% de chances supplémentaires de survivre après l'âge de 5 ans.</li>
              <!-- <li>    Pourquoi est-il important de prioriser l'éducation des filles en Afrique ?
    a. Parce que les filles sont considérées comme des charges pour les familles.
    b. Parce que les femmes sont statistiquement moins instruites que les hommes.
    c. Parce que les femmes sont vulnérables à la discrimination.
    d. Toutes les réponses ci-dessus.

    Comment la pauvreté peut-elle contribuer à la sous-scolarisation des filles ?
    a. En les obligeant à travailler pour aider leur famille.
    b. En les poussant à se marier ou à tomber enceintes précocement.
    c. En limitant l'accès aux écoles publiques en raison des frais d'inscription et d'uniformes.
    d. Toutes les réponses ci-dessus.

    Pourquoi les filles des zones rurales et périphériques sont-elles moins scolarisées ?
    a. Parce que les écoles publiques sont souvent loin de leur domicile.
    b. Parce qu'il peut être dangereux pour elles de se rendre à l'école.
    c. Parce que les parents préfèrent les garder à la maison pour les protéger de la violence.
    d. Toutes les réponses ci-dessus.

    Pourquoi une femme instruite peut-elle être un pivot important pour l'éducation de ses enfants ?
    a. Parce qu'elle peut leur transmettre ce qu'elle a appris.
    b. Parce qu'elle est mieux équipée pour lutter contre la discrimination à l'égard de l'éducation des filles.
    c. Parce qu'elle peut mieux comprendre l'importance de l'éducation pour l'avenir de ses enfants.
    d. Toutes les réponses ci-dessus.

    Quelles sont les conséquences possibles de la sous-scolarisation des filles en Afrique ?
    a. Une faible participation des femmes à la vie économique et politique.
    b. Une augmentation du taux de grossesses précoces et de mariages forcés.
    c. Une diminution des opportunités d'emploi et des revenus pour les femmes.
    d. Toutes les réponses ci-dessus.</li> -->
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
                      <span class="texttrans">{{ Str::limit($edu->description_fr,75)}}</span>
                    </div>
                    <a href="{{route('voireducation', ['id'=>$edu->id])}}" class="btn btn-danger m-4 mt-1 btn-sm btntrans"> Voir Plus</a>
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
                  <iframe class="container-fluid col-md" width="560" height="500" src="https://www.youtube.com/embed/3t9sFglnJT8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>

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