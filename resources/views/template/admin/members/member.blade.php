@extends('layouts.admin')

@section('content')

<div class="col d-flew justify-content-center" >
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
                    Adhérant
                  </p>
                  <form class="forms-sample"  method="POST" action="{{route('members.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom" name="nom">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Date de naissance</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" placeholder="Prénom" name="date_naissance">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Fonction</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="pays" name="fonction">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Region</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="pays" name="region">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" name="picture">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">numéro de téléphone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="numéro de téléphone" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="address" name="address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">section</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="section" name="section">
                    </div>
                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="civilite" id="optionsRadios1" value="homme">
                              homme
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="civilite" id="optionsRadios2" value="femme" checked="">
                              femme 
                            <i class="input-helper"></i></label>
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="payer" id="optionsRadios1" value="1">
                              Payer
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="payer" id="optionsRadios2" value="0" checked="">
                              pas Payer 
                            <i class="input-helper"></i></label>
                          </div>
                    </div>
                
                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                    <button class="btn btn-light"><a href="{{route('members.index')}}">Annuler</a></button>
                  </form>
                </div>
              </div>
            </div>

            @endsection
          