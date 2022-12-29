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
                          <option value="culture">Culture</option>
                          <option value="social">Social</option>
                          <option value="economie">Sociaux-economie</option>
                          <option value="sante">Santé</option>
                        </select>
                      </div>
                    <div class="form-group">
                   
                      <label>Image</label>
                      <input type="file" name="image" >
                    </div>
                    <div class="form-group">
                   
                   <label>video</label>
                   <input type="file" name="video">
                 </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Titre de la story</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre" name="title_fr" style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Titre de la story en anglais</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre en anglais" name="title_en" style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission </label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission" name="mission_name_fr" style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission en anglais</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission en anglais" name="mission_name_en" style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Date de la mission</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="mission_date"  style="width:1000px;">
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_fr"  style="height:100px; width:1000px;"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Description_en</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_en"  style="height:100px; width:1000px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('stories.index')}}">Annuler</a></button>
                  </form>
                </div>
              </div>
            </div>

            @endsection