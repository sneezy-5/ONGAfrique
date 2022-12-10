@extends('layouts.admin')

@section('content')

<div class="col d-flew justify-content-center>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formulaire d'enregistrement</h4>
                  @if ($errors->any())
			<div class="alert alert-danger">
				<ul class="list-unstyled">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
                  <p class="card-description">
                    Utilisateur
                  </p>
                  <form class="forms-sample"  method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="first_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Prénom</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="last_name" name="last_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="password_confirmation">
                    </div>
                    <div class="form-group">
                   
                   <label>Photo</label>
                   <input type="file" name="image" >
                 </div>
                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="is_admin" id="optionsRadios1" value="1">
                              admin
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="is_admin" id="optionsRadios2" value="0" checked="">
                              Pas admin 
                            <i class="input-helper"></i></label>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                    <button class="btn btn-light">Annuler</button>
                  </form>
                </div>
              </div>
            </div>

            @endsection
            <!--<div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                              Default
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                              Selected
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled="">
                              Disabled
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled="" checked="">
                              Selected and disabled
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div> -->