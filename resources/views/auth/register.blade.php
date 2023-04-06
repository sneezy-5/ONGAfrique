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

              <input type="text" id="form3Example3" name="name" class="form-control  champ" placeholder="{{__("nomP")}} " />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("nomP")}} 
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

          <!-- email input -->
            <div class="form-outline mb-1">

              <input type="email" name="email" id="form3Example3" class="form-control champ" placeholder="{{__("mail")}}" />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("mail")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

            <nav>
              <div class="row m-2 display-flex justify-content-center align-items-center" id="nav-tab" role="tablist">
                
                <div class="btn btn-light col-md m-1 p-1 btnprdevise3 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">XOF</div>
                <div class="btn btn-light col-md m-1 p-1  btnprdevise3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">EUR</div>
                <div class="btn btn-light col-md m-1 p-1 btnprdevise3" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">USD</div>
              </div>

            </nav>

            <label class="form-label" for="montantmois">{{__('choix')}}</label>
            <div class="input-group mb-2">
        
              <span class="input-group-text devise3">XOF</span>
              <input type="number" id="montantmois" class="form-control iptinscript4 caseprix3 champ" aria-label="Dollar amount (with dot and two decimal places)" value="100" onkeyup="convertisseur_devise3()" placeholder="saisissez un montant">
              
              <div class="alert alert-danger mb-0 invalid-feedback p-1" role="alert" id="validationServerUsernameFeedback" style="text-align:start;">
              <span class="alertprix3"> </span> <span class="devisealerte3">XOF</span>
              </div>

              <div class="valid-feedback" style="text-align:start;">
                Très bien
              </div>
            </div>

            <div class="m-0" style="display:flex; justify-content:center;align-items: center;">
              <button type="button"  class="btn btn-danger p-0 h5 btn-small" id="resultat5" style="display:none;"></button>
              <button type="button"  class="btn btn-danger p-0 h5 btn-small" id="resultat6" style="display:none;"></button>
            </div>

            <select class="francscfa3" name="amount" style="display:none;">
            <option value="100" class="FrCfa3">100</option>
           </select>

            <!-- Password input -->
            <div class="form-outline mb-1">
        
              <input id="form3Example4" class="form-control  champ"
                placeholder="{{__("password")}}"   type="password"
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
                placeholder="{{__("confirm_pass")}}"   type="password"
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
              <p class="small fw-bold mt-2 pt-1 mb-0">{{__("cmptex")}} <a href="{{route('login')}}"
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

