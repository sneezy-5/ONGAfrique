@extends('layouts.admin')

@section('content')

<div class="col-12 grid-margin stretch-card ">
        
    
              <div class="card-body">
                <div class="tab-content">
                 
                
                <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Type</strong> </label>
                        <div class="col-sm-10">
                          <p>{{$story->type}}</p>
                        </div>
                      </div>

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Titre</strong> </label>
                        <div class="col-sm-10">
                          <p>{{$story->title}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> <strong>Description</strong></label>
                        <div class="col-sm-10" style="width: 700px;">
                          <p>{{$story->description}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><strong>Nom de la mission</strong></label>
                        <div class="col-sm-10">
                          <p>{{$story->mission_name}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label"><strong>date de la mission</strong></label>
                        <div class="col-sm-10">
                          <p>{{$story->mission_date}}</p>
                        </div>
                      </div>
                      
                      <div class="tab-pane active" id="settings">


                      <label for="inputName" class="col-sm-2 col-form-label"><strong>Image</strong></label>

                        <div class="col-sm-10" >
                          <p><img src="{{asset('storage/image/'.$story->image)}}" alt="" style="width:600px; height:400px;"></p>
        
                      </div>
                    

                  </div>

                  <div class="tab-pane active" id="settings">

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label"><strong>Vidéo</strong></label>
                          <p>  <video width="500px" height="500px"
                            controls="controls"/>
                      
                           
                            <source src="{{asset('storage/vidéo/'.$story->video)}}" type="video/mp4">
                           
                         
                    </video>
                  </p>

                  </div>

                   <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
       
          <!-- /.col -->
        </div>
@endsection