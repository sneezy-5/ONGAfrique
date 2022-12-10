@extends('layouts.admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enregistrer une story
                  </h4>
                  <p class="card-description">
                  @if ($errors->any())
			<div class="alert alert-danger">
				<ul class="list-unstyled">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
                   FOrmulaire de story
                  </p>
                  <form class="forms-sample" method="POST" action="{{route('stories.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleSelectGender">Type de story</label>
                        <select class="form-control" id="exampleSelectGender" name="type" style="width:1000px;">
                          <option value="sport">Sport</option>
                          <option value="education">Education</option>
                          <option value="sante">Sante</option>
                          <option value="culture">Culture</option>
                          <option value="economie">Socio-Economie</option>
                          <option value="sociale">Social</option>
                        </select>
                      </div>
                    <div class="form-group">
                   
                      <label>Image</label>
                      <input type="file" name="image[]" multiple>
                    </div>
                    <div class="form-group">
                   
                   <label>video</label>
                   <input type="file" name="video[]" multiple>
                 </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Titre de la story</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre" name="title" style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission" name="mission_name" style="width:1000px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Date de la mission</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="mission_date"  style="width:1000px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"  style="height:100px; width:1000px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('stories.index')}}">Annuler</a></button>
                  </form>
                </div>
              </div>
            </div>

            @endsection