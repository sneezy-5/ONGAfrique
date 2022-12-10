@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Adhérants</h4>
                  <p class="card-description">
                    <code>Adhérants</code>
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
                          Email
                          </th>
                          <th>
                          Action
                          </th>
              
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($members as $member)
                        <tr>
                          <td class="py-1">
                          {{ $member->first_name }}
                          </td>
                          <td>
                            {{$member->last_name}}
                          </td>
                          <td>
                          {{$member->email}}
                          </td>
                          
                          <td>
                            <p>
                            <a href="{{route('members.edit',['member'=>$member->id])}}"><i class="fas fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('members.show',['member'=>$member->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('members.destroy',['member'=>$member->id])}}" method="post">
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