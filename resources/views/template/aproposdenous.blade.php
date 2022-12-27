@extends('base.qsnapp')

@section('qsnapp')


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


   <div class="card m-4 border-0" style="max-width: 900px;">
     <div class="row g-0">
       <div class="col-md-4">
         <img src="{{asset('styles/img/logo.jpeg')}}" class="img-fluid rounded-start" alt="...">
       </div>
       <div class="col-md-8">
         <div class="card-body">
           <h5 class="card-title text-dark fst-italic h2" style="font-weight:700;">{{__("titreQs")}}</h5>
           <p class="card-text">
            {{__("textQuiSn")}}
           </p>
           <p class="card-text"><small class="text-muted"></small></p>
         </div>
       </div>
     </div>
   </div>

   <hr>

   <div class="card mb-4" style="width: 40rem;">
     <h5 class="card-title text-dark  h2 m-0 mt-3" style="font-weight:700;">M. GABDIBE RICHARD</h5>
     <footer class="blockquote-footer mt-1">{{__("Stitre")}}</footer>
     
     <img src="{{asset('styles/img/président.jpg')}}" class="card-img-top w-100" alt="...">


   </div>
   
 <hr>


</div>

  <!--FIN CENTER-->

@endsection
