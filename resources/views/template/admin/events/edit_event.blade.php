@extends('layouts.admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enregistrer un evennement
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
                   FOrmulaire d evennement
                  </p>
                  <form class="forms-sample" method="POST" action="{{route('events.update',['event'=>$event->id])}}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                   
                      <label>Image</label>
                      <input type="file" name="picture">
                    </div>
                    <div class="form-group">
                   
                   <label>video</label>
                   <input type="file" name="video">
                 </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Titre</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre" name="title" value="{{$event->title}}"  style="height:100px; width:1000px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"  style="height:100px; width:1000px;">{{$event->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('events.index')}}">Annuler</a></button>
                  </form>
                </div>
              </div>
            </div>

            @endsection