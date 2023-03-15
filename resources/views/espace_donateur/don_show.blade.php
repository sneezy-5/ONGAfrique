@extends('base.espacedonateur')

@section('donateur')

<div class="col-sm-12">
               

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Table Dons</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{__("nom")}}</th>
                                            <!-- <th>Ville</th> -->
                                            <th>{{__("montant")}}</th>
                                            <th>{{__("date")}}</th>
                                        </tr>
                                    </thead>
                            
                                @forelse($donner as $don )

                                    <tbody>
                                        <tr>
                                            
                                            <td>{{$don->user_id}}</td>
                                            <!-- <td>{{ $don->city }}</td> -->
                                            <td>{{ $don->amount }} fcfa</td>
                                            <td>{{ $don->created_at->format('d M Y') }}</td>
                                            
                                        </tr>
                                
                                    </tbody>
                                    @empty
                                    <p style="color: red;">{{__("padn")}} <strong style="color: black;">{{auth()->user()->name}}</strong>, {{__("fmai")}} </p>
                                @endforelse
                        
                                </table>

                                
                               <style>
                                .w-5{
                                    display:none
                                }
                               </style>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection