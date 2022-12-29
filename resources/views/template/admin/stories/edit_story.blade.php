@extends('layouts.admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Editer une story
                  </h4>
                  <p class="card-description">
                   Formulaire de story
                  </p>
                  <form class="forms-sample" method="POST" action="{{route('stories.update',['story'=>$story->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleSelectGender">Type de story</label>
                        <select class="form-control" id="exampleSelectGender" name="type">
                          <option value="{{$story->type}}">{{$story->type}}</option>
                        </select>
                      </div>
                    <div class="form-group">
                   
                      <label>Image</label>
                     
                      <input type="file" name="image"  >
                    
                    </div>

                    <div class="form-group">
                   
                   <label>video</label>
                   <input type="file" name="video" >
                 </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Titre de la story</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre" name="title_fr"  value="{{$story->title_fr}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Titre de la story en anglais</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre en anglais" name="title_en"  value="{{$story->title_en}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission" name="mission_name_fr" value="{{$story->mission_name_fr}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission en anglais</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission en anglais" name="mission_name_en" value="{{$story->mission_name_en}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Date de la mission</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="mission_date" value="{{$story->mission_date}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_fr">{{$story->description_fr}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description_en</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_en">{{$story->description_en}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light">Annuler</button>
                  </form>
                </div>
              </div>
            </div>

            @endsection