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
                    Adhérant
                  </p>
                  <form class="forms-sample"  method="POST" action="{{route('members.update',['member'=>$member->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom" name="first_name" value="{{$member->first_name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Prénom</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Prénom" name="last_name" value="{{$member->last_name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pays</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="pays" name="country" value="{{$member->country}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Ville</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ville" name="city" value="{{$member->city}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">numéro de téléphone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="numéro de téléphone" name="phone" value="{{$member->phone}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">code postal</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="code postal" name="postal_code" value="{{$member->postal_code}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{$member->email}}">
                    </div>
                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="civility" id="optionsRadios1" value="homme">
                              homme
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="civility" id="optionsRadios2" value="femme" checked="">
                              femme 
                            <i class="input-helper"></i></label>
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="paye" id="optionsRadios1" value="1">
                              Payer
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="paye" id="optionsRadios2" value="0" checked="">
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
          