@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Stories</h4>
                  <p class="card-description">
                    <code>Stories</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Type
                          </th>
                          <th>
                            Titre
                          </th>
                          <th>
                          Nom de la mission
                          </th>
                          <th>
                          date de la mission
                          </th>
                          <th>
                            action
                          </th>
              
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($stories as $story)
                        <tr>
                          <td class="py-1">
                          {{ $story->type }}
                          </td>
                          <td>
                            {{$story->title}}
                          </td>
                          <td>
                          {{$story->mission_name}}
                          </td>
                          <td>
                          {{$story->mission_date}}
                          </td>
                          <td>
                            <p>
                            <a href="{{route('stories.edit',['story'=>$story->id])}}"><i class="fas fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('stories.show',['story'=>$story->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('stories.destroy',['story'=>$story->id])}}" method="post">
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