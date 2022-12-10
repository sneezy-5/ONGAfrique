@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            Nom
                          </th>
                          <th>
                            Prénom
                          </th>
                          <th>
                          email
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td class="py-1">
                          <img src="{{asset('storage/image/'.$user->image)}}" alt="">
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                     
                          <td>
                          {{$user->last_name}}
                          </td>
                          <td>
                          {{$user->email}}
                          </td>
                          <td>
                          <p>
                            <a href="{{route('users.edit',['user'=>$user->id])}}"><i class="fas fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('users.show',['user'=>$user->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('users.destroy',['user'=>$user->id])}}" method="post">
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