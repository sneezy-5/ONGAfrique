@extends('base.login')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('login')

<!--CENTER-->



<div class="center row">

<section class="w-100 blocconnexion p-3 h-100 gradient-form">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-6">
        <h1>{{__("titrespecial")}}</h1>
        <p>{{__("textspecial")}}</p>
        <img src="{{asset('styles/img/imgbanner.jpg')}}" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{route('login')}}" method="POST" class="formconnex">
          @csrf
          <div
            class="card-body row d-flex container-fluid flex-sm-row w-100 gap-2  align-items-center justify-content-center justify-content-lg-start">
            <div class="card-title text-dark h2 mb-0  col-md" style="font-weight:700;">{{__("Connexion")}}</div>



            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">{{__("mail")}}</label>
              <input type="email" name="email" id="form3Example3" class="form-control form-control-lg champ" placeholder="{{__("mail")}}" />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("mail")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">{{__("password")}}</label>
              <input type="password" name="password" id="form3Example4" class="form-control form-control-lg champ"
                placeholder="{{__("password")}}" />

              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{__("password")}}
              </div>
              <div class="valid-feedback">
                Très bien
              </div>

            </div>

            <div class="d-flex justify-content-between align-items-center">

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="text-body">{{__("oubl")}}</a>
            @endif
              
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{__("Connexion")}}
              </button>
              <p class="small fw-bold mt-2 pt-1 mb-0">{{__("pasCom")}}<a href="{{route('register')}}"
                  class="link-danger" data-bs-toggle="" data-bs-target="#exampleModal">{{__("Inscription")}}</a></p>
            </div>

        </form>
        @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center;height:auto; width:auto; font-size:15px">
        {{Session::get('success')}}
        </div>
        @endif
      </div>
    </div>
  </div>

</section>



</div>

<!--FIN CENTER-->


@endsection




 