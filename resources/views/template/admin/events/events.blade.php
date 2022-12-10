

@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Evennements</h4>
                  <p class="card-description">
                    <code>Evennements</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Titre
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                          Image
                          </th>
                          <th>
                          Action
                          </th>
              
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($events as $event)
                        <tr>
                          <td class="py-1">
                          {{ $event->title }}
                          </td>
                          <td>
                         {{ Str::limit($event->description, 50) }}   
                          </td>
                          <td>
                          <img src="{{asset('storage/image/'.$event->picture)}}" alt="">
                          </td>
                          
                          <td>
                            <p>
                            <a href="{{route('events.edit',['event'=>$event->id])}}"><i class="fas fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('events.show',['event'=>$event->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('events.destroy',['event'=>$event->id])}}" method="post">
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