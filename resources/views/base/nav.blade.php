
<span class="cp-close"></span>

<!---HEADER-->


<nav class="navbar navbar-expand-lg bg-light position-fixed w-100 headerpg w-100 headerpg d-flex justify-content-center align-items-center flex-column" style="z-index:100">

    
  <div class="top-container w-100 d-flex-md">
   
    <h2 class="m-2" style="font-weight:900">ONG Sourire d'Afrique</h2><figcaption class="blockquote-footer minititle">Toujours avec vous.</figcaption>
    @include('base.errors')
    @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center;height:auto; width:auto; font-size:15px">
        {{Session::get('success')}}
        </div>
    @endif
  </div>

  <div class="container-fluid w-100 ">
    <a class="navbar-brand img-fluid imgheader"  href="{{route('/')}}"><img src="{{asset('styles/img/logo.jpeg')}}" alt="" height="50" width="50"></a>
    
        <!----LANGUES-->
        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
          <button type="button" class="btn btn-outline-dark"><a href="locale/fr" class="text-primary" style="text-decoration: none;"><img src="{{asset('styles/img/français.webp')}}" class="img-fluid" height="20" width="20" alt="français"></a></button>
          <button type="button" class="btn btn-outline-dark"><a href="locale/en" class="text-primary" style="text-decoration: none;"><img src="{{asset('styles/img/anglais.png')}}" class="img-fluid" height="20" width="20" alt="anglais"></a></button>
        </div>
        <!----fin LANGUES-->
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/aproposdenous">Qui sommes nous</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nos Missions
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('nosmissions.sociales')}}">Social</a></li>
            <li><a class="dropdown-item" href="{{route('nosmissions.santes')}}">Santé</a></li>
            <li><a class="dropdown-item" href="{{route('nosmissions.educations')}}">Education</a></li>  
            <li><a class="dropdown-item" href="{{route('nosmissions.cultures')}}">Culture</a></li>
            <li><a class="dropdown-item" href="{{route('nosmissions.sports')}}">Sport</a></li>
            <li><a class="dropdown-item" href="{{route('nosmissions.economies')}}">Socio-économique</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nos Evènements
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('activites.index')}}">Nos Activités</a></li>
            <li><a class="dropdown-item" href="{{route('actualites.index')}}">Nos Actualités</a></li>
          </ul>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Comment Nous Aider
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Donner par mois</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalAdhesion">Adhérer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" download='{{asset("styles/img/pdf/FICHE-D'ADHESIONDEL'ONGSOURIRE.pdf")}}' href='{{asset("styles/img/pdf/FICHE-D'ADHESIONDEL'ONGSOURIRE.pdf")}}'>Télécharger Pdf Adhésion</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contact.index')}}">Contactez-Nous</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('gallery')}}">Notre Gallery</a>
        </li>

        
        @guest

        <button class="btn btn-danger navbar-btn m-1 " type="button" class="btn btn-primary"><a href="{{route('register')}}" style="text-decoration:none;color:white">{{__("Inscription")}}</a></button>
        <button class="btn btn-primary m-1"><a class="dropdown-item" href="{{route('login')}}">{{__("Connexion")}}</a></button>
        
        @endguest

        @auth
        
        <button class="btn btn-primary m-1"><a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a></button>

        @endauth

      </ul>

    </div>
  </div>
</nav>

<!--- FIN HEADER-->
<div class="container">




<!-- Modal Adhesion -->
<div class="modal fade" id="exampleModalAdhesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulaire d'Adhésion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        


        <div class=" row w-100 d-flex justify-content-center align-items-center">
          <div class="col-md-6 ">
            <img src="{{asset('styles/img/adhesion.jpg')}}" class="img-fluid w-100">
         </div>
        <form action="{{route('adhesion.store')}}" method="POST" class="col-md-6 formadhe" id="formsadhesion" enctype="multipart/form-data">
            @csrf
          <div class="card text-danger border-0 ">
            <small class="msgalert card-text"></small>
          </div>

          <div class="progressbar">
            <div class="progress" id="progress"></div>
            
            <div
              class="progress-step progress-step-active"
              data-title="{{__("inf")}}"></div>
            
            <div class="progress-step" data-title="{{__("contact")}}"></div>
            <div class="progress-step" data-title="{{__("final")}}"></div>
          </div>
          <div class="step-forms step-forms-active">
            <div class="group-inputs divipts">
              <label class="labeladhe" for="nom&prénoms">{{__("nomP")}}</label>
              <input type="text" name="nom"  class="iptadhe champadhes nomadhe">
            </div>
            <div class="group-inputs divipts">
              <label class="labeladhe" for="Datedenaissance">{{__("datenaiss")}}</label>
              <input type="date" name="date_naissance" class="iptadhe champadhes dateadhe">
            </div>
            <div class="group-inputs divipts">
              <label class="labeladhe" for="Fonction">{{__("fnction")}}</label>
              <input type="text" name="fonction" class="iptadhe champadhes fonctionadhe">
            </div>

            <div class="group-inputs divipts">
              <label class="labeladhe" for="fichier">{{__("Vphoto")}}</label>
              <input type="file" name="picture" class="form-control-file iptadhe champadhes photoadhe">
            </div>



            <div class="">
              <div class="btn btn-next width-50 ml-auto btnsuive btn-outline-primary">{{__("suivnt")}}</div>
            </div>
          </div>
          <div class="step-forms">

            <div class="group-inputs divipts">
              <label class="labeladhe" for="contacts">{{__("contact")}}</label>
              <input type="number" name="phone" class="iptadhe champadhes contactsadhe">
            </div>
            <div class="group-inputs divipts">
              <label class="labeladhe" for="email">{{__("mail")}}</label>
              <input type="email" name="email" id="email" class="iptadhe champadhes mailadhe">
            </div>

            <div class="btns-group divipts">
              <a href="#" class="btn btn-prev btnsuive btn-outline-primary">{{__("prece")}}</a>
              <a href="#" class="btn btn-next btnsuive btn-outline-primary">{{__("suivnt")}}</a>
            </div>
          </div>
          <div class="step-forms">

            <div class="group-inputs divipts">
              <label class="labeladhe" for="Région/district">{{__("region")}}</label>
              <input type="text" name="region" class="iptadhe champadhes regionadhe">
            </div>

            <div class="group-inputs divipts">
              <label class="labeladhe" for="section">{{__("section")}}</label>
              <input type="text" name="section" class="iptadhe champadhes sectionadhe">
            </div>


            <div class="form-check form-switch ">
              <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
              <label class="labeladhe" class="form-check-label" for="flexSwitchCheckCheckedDisabled">{{__("frais")}}</label>
            </div>

            <div class="btns-group">
              <div class="btn btn-prev btn-outline-primary d-flex justify-content-center align-items-center">{{__("prece")}}</div>
              <input type="submit" value="Adhérez" id="submit-form" class="btnsuive btn-success champadhes">
            </div>


          </div>
        </form>
   
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal don -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="{{asset('styles/img/logo.jpeg')}}" class="img-container" alt="" width="70" height="70">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__("FuD")}} </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row container-fluid justify-content-center  m-0">
      
        <div class="card m-2 mb-5 " style="width:25rem;">
          <img src="{{asset('styles/img/social/11.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{__("titrespecial")}}</h5>
            <p class="card-text">{{__("textspecial")}}</p>
          </div>
        </div>
  
        <div class="card m-2 mb-5 d-flex justify-content-between" style="width:20rem;">
  
        <!-- Nav pills -->
        <ul class="nav nav-pills bg-light justify-content-between">
          <li class="nav-item w-50 justify-content-center">
            <a class="nav-link active " data-bs-toggle="pill" href="#home">{{__("Dnf")}}</a>
          </li>
          @guest
          <li class="nav-item w-50 ">
            <a class="nav-link text-align-center" data-bs-toggle="pill" href="#menu1">{{__("mensuel")}}</a>
          </li>
          @endguest
        
  
        </ul>
  
  <!-- Tab panes -->
  <div class="tab-content justify-content-center align-items-center h-100">
  <div class="tab-pane card nav nav-pills active montant" id="home">
  
    <div  class="btn btn-light m-1 active btnprix" data-bs-toggle="pill">500fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">1000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">1500fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">2000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">5000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">10000fr</div> 

    <div class="card text-danger border-0 ">
      <small class="msgalertprix card-text"></small>
      <small class="msgalertcontact card-text"></small>

    </div>

    <form action="{{route('faireundon.store')}}" method="POST" class="mt-3 m-1 justify-content-between formprixmodal">
      @csrf

        <div class="input-group mb-3">
          
         @if($user = Auth::user())
          <input type="text" name="last_name" value="{{$user->name}}" class="form-control casenom" placeholder="{{__("nomP")}}">
           @else
          <input type="text" name="last_name" class="form-control casenom" placeholder="{{__("nomP")}}">

         @endif
         

        </div>
  
        <div class="input-group mb-3">
          <input type="number" name="phone" class="form-control casecontact"  placeholder="{{__("contact")}}">
          
         </div>
         
      <div class="input-group mb-3">
        <span class="input-group-text">F CFA</span>
        <input type="number" name="amount" class="form-control caseprix" aria-label="Dollar amount (with dot and two decimal places)" value="500">
        
        <div id="validationServerUsernameFeedback" class="invalid-feedback" style="text-align:start;">
        {{__("montantSup")}}
        </div>
        <div class="valid-feedback" style="text-align:start;">
          Très bien
        </div>
      </div>
  
     <div>
  
      <p>
        <div class="form-check d-flex gap-2">
          <input class="form-check-input btncoche" type="checkbox" name="honneur" id="flexCheckDefault" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
          <label class="form-check-label" for="flexCheckDefault">
          {{__("honneur")}} 
          </label>
        </div>
  
      </p>
      <div class="collapse" id="collapseExample">
        <div class="form-group">
         <input type="text" name="honnoree" class="form-control specialchamp" placeholder="{{__("honneur")}}">
        </div>
      </div>
  
     </div>
  
      <input type="submit" value="{{__("FuD")}}" class="btn btn-primary w-100 mt-5 btnapi1">
    </form>
  </div>
  
  
  
@guest
  <div class="tab-pane container fade" id="menu1">
  
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="">
      <div class="card rounded-3">
        <img src="{{asset('styles/img/3.jpg')}}"
          class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
          alt="Sample photo">
        <div class="card-body ">
          <h3>{{__("Inscription")}}</h3>
           <small class="m-0 p-0  alertinscri" style="color: red;"></small>

          <form action="{{route('register')}}" method="post" class="px-md-2 mt-2 forminscrimodal">
            @csrf
            <div class="form-outline mb-1">
              <label class="form-label" for="nom">{{__("nomP")}}</label>
              <input type="text" name="name" id="nom" class="form-control iptinscript1"/>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="mail">{{__("mail")}}</label>
              <input type="email" name="email" id="mail" class="form-control iptinscript2 un"/>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="chiffre">{{__("choix")}}</label>

              <select class="form-select chiffreinscri" name="amount" aria-label="Default select example">

                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
              </select>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="pass">{{__("password")}}</label>
              <input type="password" name="password" id="pass" class="form-control iptinscript3 un"/>
              
              <label class="form-label" for="pass">{{__("confirm_pass")}}</label>
              <input type="password" name="password_confirmation" id="pass" class="form-control iptinscript3 un"/>

            </div>

            <button type="submit" class="btn btn-success mb-1">{{__("Inscription")}}</button>

          </form>

        </div>
      </div>
    </div>
  </div>

</div>
  @endguest

  </div>
  
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__("fermer")}}</button>
      </div>
    </div>
  </div>
  </div>

  <!--fin modal-->

@if (!Route::is('login','register','contact.index','gallery','voirculture','actualites.show','activites.show',
                'voireconomie', 'voireducation','voirsante','voirsociale','voirsport',))
  
         <!---BANNER-->
   
         <div id="carouselExampleControls" class="carousel banner slide w-100" data-bs-ride="carousel">


<img src="{{asset('styles/img/cercle ong.webp')}}" class="img-fluid cerclebanner" alt="" height="200" width="200">

<p class="typingparent"><!---mettre dans la span texttype-->
 <span class="text first-text display-5 " >Nous Vous <span class="text texttype"></span></span>
</p>

 
 <div class="carousel-inner parentbanner">
   

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
  
@endif


  




   