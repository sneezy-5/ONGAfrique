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

    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('espacedonateur/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="shortcut icon" href="{{url('styles/img/logo.jpeg')}}" />

    <link rel="stylesheet" href="{{asset('espacedonateur/assets/css/style.css')}}">

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
                        <img class="img-xs rounded-circle" src="{{asset('storage/image/'.auth()->user()->image)}}" alt="Profile image">

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
    <script src="{{asset('espacedonateur/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('espacedonateur/assets/js/widgets.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('espacedonateur/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
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
