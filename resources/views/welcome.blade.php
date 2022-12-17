@extends("base.homeapp")


@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('acceuil')

<!---BANNER-->
   
<div id="carouselExampleControls" class="carousel banner slide w-100" data-bs-ride="carousel">


<img src="{{asset('styles/img/cercle ong.webp')}}" class="img-fluid cerclebanner" alt="" height="200" width="200">


 
 <div class="carousel-inner">
   

   <div class="carousel-item container-fluid active">
     <div class="d-block w-100 img" ></div>
   </div>
   <div class="carousel-item container-fluid">
     <div class="d-block w-100 img" ></div>
   </div>
   <div class="carousel-item container-fluid">
     <div class="d-block w-100 img" ></div>
   </div>

 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
 </button>
</div>
<!---FIN BANNER-->

 <!--CENTER-->

 <div class="center row">

<div class="parentbloc0">
       
  <div class="card-text w-100 m-2 container-fluid d-flex justify-content-center align-items-center flex-column"  style="text-align:center;">
    <h1 class="card-title text-dark fst-italic mb-4 mt-5" style="font-weight:700;">NOS MISSIONS</h1>
    <p class="w-75 text-dark h5 mb-5">L'ONG SOURIRE D'AFRIQUE crée le 08 septembre 2022 à Taabo par son président Monsieur Richard GABDIBE résidant aux États-Unis fils et cadre de Taabo-Village à pour mission de venir en aide aux personnes vulnérables notamment : les veuves, les orphelins,les malades, les handicapés...

L'ONG sourire d'Afrique est aussi en charge d' accompagner les jeunes et les femmes dans leurs projets entrepreneuriales Nous intervenons dans le social, la santé, l'éducation, les activités socio-économiques, culturelles et sportives</p>
  </div>

</div>

<div class="parentbloc1 row">


  <div class="card m-3 mb-3 mt-3 " style="width:18rem;">
    <img src="{{asset('styles/img/social/4.jpg')}}" alt="" class="card-img-top" enctype="multipart/form-data">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Nos actions sociales</h5>
      <a href="{{route('nosmissions.sociales')}}" class="btn btn-primary">Voir</a>
    </div>
  </div>

  <div class="card m-3 mb-3 mt-3" style="width:18rem;">
    <img src="{{asset('styles/img/sante/6.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Accompagnons les malades</h5>
      <a href="{{route('nosmissions.santes')}}" class="btn btn-primary">Voir</a>
    </div>
  </div>

  <div class="card m-3 mb-3 mt-3" style="width:18rem;">
    <img src="{{asset('styles/img/education/3.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Les enfants non scolarisés</h5>
      <a href="{{route('nosmissions.educations')}}" class="btn btn-primary">Voir</a>
    </div>
  </div>

</div>

<div class="parentbloc2 row container-fluid d-flex justify-content-center align-items-center">


    <div class="bloc-info m-5">

      <div class="titreinfo container-fluid align-items-center card-body" style="text-align:start;">
      <h3 class="title text-dark fst-italic"  style="font-weight:700;">
          L'AIDE HUMANITAIRE DE L'ONG SOURIRE D'AFRIQUE POUR LES ENFANTS <br>
        <a href="{{route('actualites.index')}}" class="h5">LISEZ NOS HISTOIRES »</a>
      </h3>
     </div>

     <div class="card w-100">
      <img class="card-img-top" src="{{asset('styles/img/social/7.jpg')}}" alt="Card image">
      <div class="card-body">
        <h1 class="card-title text-dark fst-italic mb-2" style="font-weight:700;">Action Sociale</h1>
        <p class="card-text">
        Le Jeudi 03 novembre  2022  les membres de L’ONG SOURIRE D’AFRIQUE ont effectué une visite à la maison de correction et d’arrêt de TIASSALE pour des dons en vivre et non vivre (03 sacs de riz de 50 kg, 03 cartons de 60 savons (180), 02 sacs d’OMO (240 sachets) et des kits d’habits). 

Notre priorité.
        </p>
        <a href="{{route('nosmissions.sociales')}}" class="btn btn-primary">Lire la suite</a>
      </div>
    </div>


       <div class="row d-flex justify-content-center align-items-center m-3">

        <a href="{{route('nosmissions.cultures')}}" class="card-body col-md-3  m-1 liensous">
          <img src="{{asset('styles/img/culture/3.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h5 class="card-title h6">nos activités culturelles</h5>
        </a>

        <a href="{{route('nosmissions.economies')}}" class="card-body col-md-3  m-1 liensous">
          <img src="{{asset('styles/img/socioeconomique/1.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h4 class="card-title  h6">Socio-économique</h4>
        </a>

        <a href="{{route('nosmissions.sports')}}" class="card-body col-md-3 m-1 liensous">
          <img src="{{asset('styles/img/sport/2.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h4 class=" card-title  h6">Nos activités sportives</h4>
        </a>

       </div>

    </div>

</div>

<div class="parentbloc3 row d-flex justify-content-center align-items-center">

  <div class="card-text w-100 m-2 container-fluid d-flex justify-content-center align-items-center flex-column"  style="text-align:center;">
    <h1 class="card-title text-light fst-italic mb-4 mt-5" style="font-weight:700;">Plan sanitaire</h1>
    <p class="w-75 text-light h5 mb-5">En prélude de la fête  l'indépendance 2022 , l'ONG Sourire D'Afrique a méné une opération Coup de Balai  à l'hôpital Général de TAABO en présence du Préfet , des adjoints aux maire , de la directrice de l'hôpital,  des autorités Administrative</p>
  </div>



  <div class="row mb-5 infosocial d-flex justify-content-center">

       <div class="col-md-5 container-fluid blocsocial m-2">
        <h1 class="card-title text-light fst-italic mb-4 mt-5 h3" style="font-weight:700;">Participez avec nous</h1>
        <p class="text-light">
        recevez des informations sur nos actions et activités en remplissant la newsletter
        </p>

        <form action="{{route('newsletter.store')}}" method="POST" class="formcenter required ">
          @csrf
          <div class="form-group d-flex flex-column flex-sm-row gap-2">
            <input type="email" name="email"  class="form-control newslettercenter" placeholder="Newsletter">
            <input type="submit" value="Envoyer" class="btn btn-success ml "></input>
           </div>
        </form>

        <div class="mt-5">
          <a class="btn btn-primary btn-lg" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

          <a class="btn btn-primary btn-lg" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        </div>

      </div>
       <div class="col-md-6 container-fluid m-2">
       <iframe class="container-fluid col-md" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100086654464545&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
  
      </div>
  </div>

</div>

</div>

 <!--FIN CENTER-->
@endsection