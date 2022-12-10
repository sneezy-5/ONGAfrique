@extends('layouts.admin')

@section('content')


<div class="col-12 grid-margin stretch-card">
  
              <div class="card-body">
                <div class="tab-content">
                 

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                          <p>{{$event->title}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <p>{{$event->description}}</p>
                        </div>
                      </div>
                
                      <div class="tab-pane active" id="settings">
                      @foreach(json_decode($event->picture,true) as $picture)

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Image</label>

                        <div class="col-sm-10" >
                          <p><img src="{{asset('storage/image/'.$picture)}}" alt="" style="width:600px; height:400px;"></p>

                      </div>

                      </div>

                    @endforeach
                  </div>
                  
                  <div class="tab-pane active" id="settings">
                      @foreach(json_decode($event->video,true) as $video)

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Vidéo</label>

                        <div class="col-sm-10" >
                          <p>  <video width="500px" height="500px"
                            controls="controls"/>
                            
                            <source src="{{asset('storage/vidéo/'.$video)}}"
                                type="video/mp4">
                    </video>
                  </p>
                      </div>
                    
                      </div>
                      
                      @endforeach
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
       
          <!-- /.col -->
        </div>

@endsection