@extends('layouts.admin')

@section('content')


<div class="col-12 grid-margin stretch-card ">
      
    
              <div class="card-body">
                <div class="tab-content">
                 
                
                <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <p>{{$don->last_name}}</p>
                        </div>
                      </div>

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Honnoree</label>
                        <div class="col-sm-10">
                          <p>{{$don->honnoree}}</p>
                        </div>
                      </div>
                  
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <p>{{$don->phone}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">honneur de</label>
                        <div class="col-sm-10">
                          <p>{{$don->honneur}}</p>
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Montant</label>
                        <div class="col-sm-10">
                          <p>{{$don->amount}}</p>
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