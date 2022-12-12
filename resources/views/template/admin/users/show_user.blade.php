@extends('layouts.admin')

@section('content')

<div class="col-12 grid-margin stretch-card ">
        
    
              <div class="card-body">
                <div class="tab-content">
                 
                
                <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Nom</strong></label>
                        <div class="col-sm-10">
                          <p>{{$user->last_name}}</p>
                        </div>
                      </div>

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Prénom</strong></label>
                        <div class="col-sm-10">
                          <p>{{$user->first_name}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Email</strong></label>
                        <div class="col-sm-10">
                          <p>{{$user->email}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Admin</strong></label>
                        <div class="col-sm-10">
                          <p>@if($user->is_admin==1) Oui @else Non @endif</p>
                        </div>
                      </div>
               
               
                      <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Image</strong></label>
                        <div class="col-sm-10">
                          <p><img src="{{asset('storage/image/'.$user->image)}}" alt=""></p>
                        </div>
                      </div>
                      
                  </div>
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
   
@endsection