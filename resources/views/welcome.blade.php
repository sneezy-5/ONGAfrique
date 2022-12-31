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
    <h1 class="card-title text-dark fst-italic mb-4 mt-5" style="font-weight:700;">{{__("Nosmissions")}}</h1>
    <p class="w-75 text-dark h5 mb-5">{{__("Texte1A")}}</p>
  </div>

</div>

<div class="parentbloc1 row">


  <div class="card m-3 mb-3 mt-3 " style="width:18rem;">
    <img src="{{asset('styles/img/social/4.jpg')}}" alt="" class="card-img-top" enctype="multipart/form-data">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">{{__("titre1")}}</h5>
      <a href="{{route('nosmissions.sociales')}}" class="btn btn-primary">{{__("Voir")}}</a>
    </div>
  </div>

  <div class="card m-3 mb-3 mt-3" style="width:18rem;">
    <img src="{{asset('styles/img/sante/6.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">{{__("titre2")}}</h5>
      <a href="{{route('nosmissions.santes')}}" class="btn btn-primary">{{__("Voir")}}</a>
    </div>
  </div>

  <div class="card m-3 mb-3 mt-3" style="width:18rem;">
    <img src="{{asset('styles/img/education/3.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">{{__("titre3")}}</h5>
      <a href="{{route('nosmissions.educations')}}" class="btn btn-primary">{{__("Voir")}}</a>
    </div>
  </div>

</div>

<div class="parentbloc2 row container-fluid d-flex justify-content-center align-items-center">


    <div class="bloc-info m-5">

      <div class="titreinfo container-fluid align-items-center card-body" style="text-align:start;">
      <h3 class="title text-dark fst-italic"  style="font-weight:700;">
      {{__("Texte2A")}}<br>
        <a href="{{route('actualites.index')}}" class="h5">{{__("Texte3A")}}</a>
      </h3>
     </div>

     <div class="card w-100">
      <img class="card-img-top" src="{{asset('styles/img/social/medium-shot-community-painting-wood.jpg')}}" alt="Card image">
      <div class="card-body">
        <h1 class="card-title text-dark fst-italic mb-2" style="font-weight:700;">{{__("ActSo")}}</h1>
        <p class="card-text">
        {{__("titre4")}}
        </p>
        <a href="{{route('nosmissions.sociales')}}" class="btn btn-primary">{{__("lire_suite")}}</a>
      </div>
    </div>


       <div class="row d-flex justify-content-center align-items-center m-3">

        <a href="{{route('nosmissions.cultures')}}" class="card-body col-md-3  m-1 liensous">
          <img src="{{asset('styles/img/culture/3.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h5 class="card-title h6">{{__("NActCul")}}</h5>
        </a>

        <a href="{{route('nosmissions.economies')}}" class="card-body col-md-3  m-1 liensous">
          <img src="{{asset('styles/img/socioeconomique/1.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h4 class="card-title  h6">{{__("Socioeconomique")}}</h4>
        </a>

        <a href="{{route('nosmissions.sports')}}" class="card-body col-md-3 m-1 liensous">
          <img src="{{asset('styles/img/sport/2.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
          <h4 class=" card-title  h6">{{__("NosActiviteSportives")}}</h4>
        </a>

       </div>

    </div>

</div>

<div class="parentbloc3 row d-flex justify-content-center align-items-center">

  <div class="card-text w-100 m-2 container-fluid d-flex justify-content-center align-items-center flex-column"  style="text-align:center;">
    <h1 class="card-title text-light fst-italic mb-4 mt-5" style="font-weight:700;">{{__("PlanSanitaire")}}</h1>
    <p class="w-75 text-light h5 mb-5">{{__("TextPlanS")}}</p>
  </div>



  <div class="row mb-5 infosocial d-flex justify-content-center">

       <div class="col-md-5 container-fluid blocsocial m-2">
        <h1 class="card-title text-light fst-italic mb-4 mt-5 h3" style="font-weight:700;">{{__("Participez")}}</h1>
        <p class="text-light">
        {{__("TextNews")}}
        </p>

        <form action="{{route('newsletter.store')}}" method="POST" class="formcenter required ">
          @csrf
          <div class="form-group d-flex flex-column flex-sm-row gap-2">
            <input type="email" name="email"  class="form-control newslettercenter" placeholder="Newsletter">
            <input type="submit" value="{{__("Envoyer")}}" class="btn btn-success ml "></input>
           </div>
        </form>

        <div class="mt-5">
          <a class="btn btn-primary btn-lg" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

          <a class="btn btn-primary btn-lg" style="background-color: #3b5998;" href="https://web.facebook.com/profile.php?id=100086654464545" role="button"><i class="fab fa-facebook-f"></i></a>
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