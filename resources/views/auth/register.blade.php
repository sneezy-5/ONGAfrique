@extends('base.register')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('register')

     <!--CENTER-->

 <div class="center row">

<section class="w-100 blocconnexion p-3 h-100 gradient-form">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9  col-xl-6">
        <h1>{{__("titrespecial")}}</h1>
        <p>{{__("textspecial")}}</p>
        <img src="{{asset('styles/img/imgbanner.jpg')}}" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4">
        <form method="POST" action="{{ route('register') }}" class="formconnex">
            @csrf
          <div
            class="card-body row d-flex container-fluid flex-sm-row w-100 gap-2  align-items-center justify-content-center justify-content-lg-start">
            <div class="card-title text-dark h2 mb-0  col-md" style="font-weight:700;">{{__("Inscription")}}</div>



            <!-- nom et prenom input -->
            <div class="form-outline mb-1">

              <input type="text" id="form3Example3" name="name" class="form-control  champ" placeholder="nom" />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("nomP")}} 
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

          <!-- email input -->
            <div class="form-outline mb-1">

              <input type="email" name="email" id="form3Example3" class="form-control champ" placeholder="Email" />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("mail")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="chiffre">{{__("choix")}}</label>

              <input type="text" name="amount" class="iptadhe champadhes contactsadhe">

            </div>

            <!-- Password input -->
            <div class="form-outline mb-1">
        
              <input id="form3Example4" class="form-control  champ"
                placeholder="Entrer un mot de passe"   type="password"
                                name="password"
                                required autocomplete="new-password"/>

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("password")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div> 

            <div class="form-outline mb-1">
        
              <input id="form3Example4" class="form-control  champ"
                placeholder="Confimez mot de passe"   type="password"
                                name="password_confirmation" required/>

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("confirm_pass")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div> 

            <div class="text-center text-lg-start  pt-2">
                <input type="submit" value="{{__("Inscription")}}" class="btn btn-primary">
              <p class="small fw-bold mt-2 pt-1 mb-0">Vous avez déjà un compte ? <a href="{{route('login')}}"
                  class="link-danger"  data-bs-target="#exampleModal">{{__("Connexion")}}</a></p>
            </div>

        </form>
      </div>
    </div>
  </div>

</section>



</div>

<!--FIN CENTER-->


@endsection

