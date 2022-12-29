@extends('base.activiteapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('activite')
  
  
  
     <!---BANNER-->


     
     <div id="carouselExampleControls" class="carousel banner slide w-100" data-bs-ride="carousel">

   

        <img src="{{asset('styles/img/cercle ong.webp')}}" class="img-fluid cerclebanner" alt="" height="200" width="200">

 
      
      

      <div class="carousel-inner">
        

        <div class="carousel-item container-fluid active">
          <div class="d-block w-100 img" ></div>
        </div>
        <div class="carousel-item container-fluid">
          <div class="d-block w-100 img" ></div>
        </div>
        <div class="carousel-item container-fluid">
          <div class="d-block w-100 img" ></div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
     <!---FIN BANNER-->





     <!--CENTER-->

 <div class="center row">

    <div class="parentbloc0 row w-100">
   
    <h1 class=" m-4 text-dark " style="font-weight:700 ;text-align: center;">{{__("titreevent")}}</h1>

@foreach($event as $ev)

<div class="imgzoom card m-3 mb-3 mt-3 p-1"  style="width:18rem;">
    <!-- Trigger the Modal -->
    
    <img class="myImg imgtrans" src="{{asset('storage/image/'.$ev->picture)}}" alt="Snow" style="width:100%;max-width:300px">
   

     <!-- The Modal -->
    <div class="myModal modalimg">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-contentimg img01" src="#">


    <!-- Modal Caption (Image Text) -->
    <div class="caption"></div>
   </div>

    <div class="card-body entete">
     <h4 class="card-title Titretrans">@if (app()->getLocale()=="fr"){{ $ev->title_fr}} @else {{ $ev->title_en}} @endif</h4>
        <p class="card-text text-dark texttrans txtcarac">
        @if (app()->getLocale()=="fr") {{Str::limit( $ev->description_fr, 50)}} @else {{Str::limit( $ev->description_en, 50)}}  @endif 
       </p>
        <a href="{{route('voiractualite',['id'=>$ev->id])}}" class="btn btn-primary btntrans">Voir plus..</a>

        <footer class="blockquote-footer mt-1 mb-0">ok<cite title="Source Title" class="fw-bold text-dark"> <span>10</span> <span>Nov</span> <span>2022</span> </cite></footer>
        
    </div>
  
  </div>

@endforeach


                               <style>
                                .w-5{
                                    display:none
                                }
                               </style>
  <!--  -->

                   

    </div>

   
</div>

     <!--FIN CENTER-->

  @endsection()