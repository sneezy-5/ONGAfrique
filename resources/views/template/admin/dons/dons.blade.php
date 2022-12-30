@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dons</h4>
                  <p class="card-description">
                    <code>Dons</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Nom
                          </th>
                          <th>
                            Prénom
                          </th>
                          <th>
                          honneur
                          </th>
                          <th>
                          amount
                          </th>
                          <th>
                            action
                          </th>
              
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dons as $don)
                        <tr>
                          <td class="py-1">
                          {{ $don->last_name }}
                          </td>
                          <td>
                            {{$don->first_name}}
                          </td>
                          <td>
                          {{$don->honneur}}
                          </td>
                          <td>
                          {{$don->amount}}
                          </td>
                          <td>
                            <p>
                            <form action="{{route('dons.destroy',['don'=>$don->id])}}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit"><i class="fas fa-trash-alt" style='font-size:36px;color:red'></i></button>
                            </form>
                         
                            
                            </p>
                
                      
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        
            @endsection