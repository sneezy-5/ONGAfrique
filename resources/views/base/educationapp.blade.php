<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    
    <!-- Bootstrapp only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Bootstrapp only -->
      <link rel="stylesheet" href="{{asset('styles/fontawesome-free-5.14.0-web/css/all.min.css')}}">

   <!--cinepay et kkiapay-->
   <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
  <script src="https://cdn.kkiapay.me/k.js"></script>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <!--neww pour devise-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('styles/csss/faireundon.css')}}">
    <link rel="stylesheet" href="{{asset('styles/csss/education.css')}}">
    <link rel="stylesheet" href="{{asset('styles/csss/Accueil.css')}}">

<!-- Autres -->
    <link href="{{asset('styles/css/templatemo-nomad-force.css')}}" rel="stylesheet">
    <link href="{{asset('styles/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('styles/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  
  <link rel="stylesheet" href="{{asset('styles/plugins/fontawesome/css/all.min.css')}}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{asset('styles/plugins/colorbox/colorbox.css')}}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{asset('styles/css/gallery.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="{{url('styles/img/logo.jpeg')}}" />

    <title>@yield('title')</title>
</head>
<body>
@include('base.nav')

@yield('education')

<footer class="py-5">
      <div class="row w-100">
        <div class="col-6 col-md-2 mb-3">
          <h5>{{__("Nosmissions")}}</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('nosmissions.sociales')}}" class="nav-link p-0 text-muted">{{__("Social")}}</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.santes')}}" class="nav-link p-0 text-muted">{{__("Sante")}}</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.educations')}}" class="nav-link p-0 text-muted">{{__("Education")}}</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.cultures')}}" class="nav-link p-0 text-muted">{{__("Culture")}}</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.sports')}}" class="nav-link p-0 text-muted">{{__("Sport")}}</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.economies')}}" class="nav-link p-0 text-muted">{{__("Socio-économique")}}</a></li>
          </ul>
        </div>
    
        <div class="col-6 col-md-2 mb-3">
          <h5>{{__("NosActualite")}}</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('activites.index')}}" class="nav-link p-0 text-muted">{{__("NosActivites")}}</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Partager une Story</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5>{{__("CnA")}}</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">{{__("DPm")}}</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">{{__("Adhérer")}}</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" data-bs-toggle="modal"
                data-bs-target="#exampleModal">{{__("FuD")}}</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
      
          <form action="{{route('newsletter.store')}}" method="POST" class="formfooter">
            @csrf

            <h5>{{__("Abonnez")}}</h5>
            <p>{{__("Notifi")}}</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="email" name="email" class="form-control newsletterfooter" placeholder="Email address">
              <button class="btn btn-primary" type="submit">{{__("Envoyer")}}</button>
            </div>
          </form>
          @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center; height:auto; width:auto; font-size:15px">
        {{Session::get('success')}}
        </div>
        @endif
        
        
        </div>


      </div>

      <div class="d-flex flex-column flex-md-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022 Company, Created by ESO-DEV .</p>
        <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="https://web.facebook.com/profile.php?id=100086654464545"><i class="fab fa-facebook-f"></i></a></li>

          <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-google"></i></a></li>
        </ul>
      </div>
    </footer>


    <button class="btn btn-danger btnflottant" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <span class="spinner-grow spinner-grow-sm"></span>
      {{__("Don")}}
    </button>

  </div>


  <script src="{{asset('styles/jss/faireundon.js')}}"></script>
  <script src="{{asset('styles/jss/social.js')}}"></script>
  @include('base.jsapp')
</body>

</html>