@extends('layouts.admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Envoyer un mail
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
                   
                  </p>
                  <form class="forms-sample" method="POST" action="{{route('newletter.store')}}" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-group">
                   
                      <label>Image</label>
                      <input type="file" name="picture[]" multiple>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">object</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Le tritre" name="subject"  style="width:1000px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4" name="message" style="height:100px; width:1000px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('events.index')}}">Annuler</a></button>
                  </form>
                </div>
              </div>
            </div>

            @endsection