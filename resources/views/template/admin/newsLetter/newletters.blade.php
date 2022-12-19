@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Newsletter</h4>
                  <p class="card-description">
                    <code>newsletter</code>
                  </p>
                  <div class="table-responsive">
                  <a class="btn btn-primary" href="{{route('newletter.export')}}" role="button">Expoter Email</a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Email
                          </th>
                  
              
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($newsletters as $newsletter)
                        <tr>
                          <td class="py-1">
                          {{ $newsletter->email }}
                          </td>
                        
                          <td>
                            <p>

                            <form action="{{route('newletter.destroy',['newletter'=>$newsletter->id])}}" method="post">
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