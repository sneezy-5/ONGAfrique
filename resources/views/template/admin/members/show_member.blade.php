@extends('layouts.admin')

@section('content')


<div class="col-12 grid-margin stretch-card ">
      
    
              <div class="card-body">
                <div class="tab-content">
                 
                
                <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <p>{{$member->nom}}</p>
                        </div>
                      </div>

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Date de naissance</label>
                        <div class="col-sm-10">
                          <p>{{$member->date_naissance}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Fonction</label>
                        <div class="col-sm-10">
                          <p>{{$member->fonction}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <p>{{$member->phone}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <p>{{$member->email}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                          <p>{{$member->region}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <p>{{$member->address}}</p>
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Section</label>
                        <div class="col-sm-10">
                          <p>{{$member->section}}</p>
                        </div>
                      </div>
                  </div>

                  <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Civilite</label>
                        <div class="col-sm-10">
                          <p>{{$member->civilite}}</p>
                        </div>
                      </div>
                  </div>
                  
                  <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <p>@if($member->payer==0)Pas Payer @else Payer @endif</p>
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