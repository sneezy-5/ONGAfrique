<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESPACE DONATEUR</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('espacedonateur/assets/css/espacedon.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/jqvmap/dist/jqvmap.min.css')}}">
    
    <!-- Bootstrapp only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrapp only -->
    <link rel="shortcut icon" href="{{url('styles/img/logo.jpeg')}}" />

    <link rel="stylesheet" href="{{asset('espacedonateur/assets/css/style.css')}}">
    <!--cinepay-->
   <script src="https://cdn.cinetpay.com/seamless/main.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>




    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img  src="{{asset('styles/img/logo.jpeg')}}" alt="" height="50" width="50"></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/"> <i class="menu-icon fa fa-home"></i>{{__("Accueil")}}</a>
                        <a href="{{route('dashboard.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- <h3 class="menu-title">UI elements</h3>/.menu-title -->
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="#">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="#">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="#">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="#">Social Buttons</a></li>
                          
                        </ul>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>{{__("Don")}}</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{route('voirmesdons.index')}}">{{__("voirDon")}}</a></li>
                            <!-- <li><i class="fa fa-money"></i><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__("FuD")}}</a></li> -->
                            <li><i class="fa fa-money"></i><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">{{__("FuD")}}</a></li>
                        </ul>
                    </li>


                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="/profil" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Profil</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="#">mise à jour</a></li>
                             <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li> 
                        </ul>
                    </li> -->
                </ul>
                    
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->



    <!-- Modal don -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  
    <div  class="btn btn-light m-1 active btnprix" data-bs-toggle="pill">100fr</div>
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
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-xs rounded-circle" style="height:50px; width:50px" src="{{asset('storage/image/'.auth()->user()->image)}}" alt="Profil image">

                        </a>
                        <!-- <h3 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{auth()->user()->name}}
                            </span></h3> -->
                        <div class="user-menu dropdown-menu">
                            
                            <p2 class="mb-1 mt-3 font-weight-semibold">{{auth()->user()->name}}</p2>
                            <p2 class="fw-light text-muted mb-0">{{auth()->user()->email}}</p2>

                                <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button><i class="dropdown-item-icon mdi mdi-power text-primary me-2"href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" style="border:none ;"></i>{{__("Deconnexion")}}</button>
                                </form>

                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       @yield('donateur')

    </div>
    <!-- Right Panel -->

    <script src="{{asset('espacedonateur/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('espacedonateur/assets/js/main.js')}}"></script>


    <script src="{{asset('espacedonateur/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('espacedonateur/assets/js/espacedon.js')}}"></script>
    <script src="{{asset('espacedonateur/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('espacedonateur/assets/js/widgets.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
