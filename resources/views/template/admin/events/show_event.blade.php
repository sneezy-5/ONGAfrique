

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

                      <label for="inputName" class="col-sm-2 col-form-label">Image</label>

                        <div class="col-sm-10" >
                          <p><img src="{{asset('storage/image/'.$event->picture)}}" alt="" style="width:600px; height:400px;"></p>

                      </div>
                  </div>
                  
                  <div class="tab-pane active" id="settings">
                     

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Vidéo</label>

     
                          <p>  <video width="500px" height="500px"
                            controls="controls"/>
                      
                           
                            <source src="{{asset('storage/vidéo/'.$event->video)}}" type="video/mp4">
                           
                        
                    
                      </div>
                    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
       
          <!-- /.col -->
        </div>

@endsection