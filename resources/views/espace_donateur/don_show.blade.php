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
                                            <th>Nom</th>
                                            <th>Ville</th>
                                            <th>Montant</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                            
                                @forelse(auth()->user()->dons as $don )

                                    <tbody>
                                        <tr>
                                            <td>{{auth()->user()->name}}</td>
                                            <td>{{ $don->city }}</td>
                                            <td>{{ $don->amount }} fcfa</td>
                                            <td>{{ $don->created_at->format('d M Y') }}</td>
                                            
                                        </tr>
                                
                                    </tbody>
                                    @empty
                                    <p style="color: red;">Il n'y a pas de don pour <strong style="color: black;">{{auth()->user()->name}}</strong>, faites un don maintenant ! </p>
                                @endforelse
                        
                                </table>

                               {{$donner->links()}}
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