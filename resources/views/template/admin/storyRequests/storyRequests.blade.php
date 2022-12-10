@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Story Request</h4>
                  <p class="card-description">
                    <code>Story request</code>
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
                        @foreach($storyRequests as $storyrequest)
                        <tr>
                          <td class="py-1">
                          {{ $storyrequest->first_name }}
                          </td>
                          <td>
                            {{$storyrequest->last_name}}
                          </td>
                          <td>
                          {{$storyrequest->email}}
                          </td>
                          
                          <td>
                            <p>
                            <a href="{{route('storyrequests.edit',['storyrequest'=>$storyrequest->id])}}"><i class="fas fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('storyrequests.show',['storyrequest'=>$storyrequest->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('storyrequests.destroy',['storyrequest'=>$storyrequest->id])}}" method="post">
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