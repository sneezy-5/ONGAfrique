<footer class="py-5">
      <div class="row w-100">
        <div class="col-6 col-md-2 mb-3">
          <h5>Nos Missions</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('nosmissions.sociales')}}" class="nav-link p-0 text-muted">Social</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.santes')}}" class="nav-link p-0 text-muted">Santé</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.educations')}}" class="nav-link p-0 text-muted">Education</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.cultures')}}" class="nav-link p-0 text-muted">Culture</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.sports')}}" class="nav-link p-0 text-muted">Sport</a></li>
            <li class="nav-item mb-2"><a href="{{route('nosmissions.economies')}}" class="nav-link p-0 text-muted">Socio-économique</a></li>
          </ul>
        </div>
    
        <div class="col-6 col-md-2 mb-3">
          <h5>Nos Activités</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('activites.index')}}" class="nav-link p-0 text-muted">Nos activités</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Partager une Story</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5>Comment Nous Aider</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Donner par mois</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Adhésion</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Faites un don</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
      
          <form action="{{route('newsletter.store')}}" method="POST" class="formfooter">
            @csrf

            <h5>Abonnez-vous à notre newsletter</h5>
            <p>Et recevez des notifications sur nous</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="email" name="email" class="form-control newsletterfooter" placeholder="Email address">
              <button class="btn btn-primary" type="submit">Envoyer</button>
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
          <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-google"></i></a></li>
        </ul>
      </div>
    </footer>


    <button class="btn btn-danger btnflottant" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <span class="spinner-grow spinner-grow-sm"></span>
      Don..
    </button>

  </div>


  <script src="{{asset('styles/jss/Accueil.js')}}"></script>
  <script src="{{asset('styles/jss/connexion.js')}}"></script>
  <script src="{{asset('styles/jss/About.js')}}"></script>
  <script src="{{asset('styles/jss/description.js')}}"></script>
  <script src="{{asset('styles/jss/social.js')}}"></script>
  <script src="{{asset('styles/jss/activites.js')}}"></script>
  <script src="{{asset('styles/jss/actualites.js')}}"></script>
  <script src="{{asset('styles/jss/partieinscription.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>