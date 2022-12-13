@extends('base.actualiteapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('actualite')

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

<div class=" w-100  parentblocstory">
<h1 class=" m-4 text-dark h2" style="font-weight:700;text-align:center;">Nos Actualités</h1> 

<div class="row w-100 mt-0 Storydiv"> 


@foreach($storys as $stori)
<a href="{{route('voiractualite',['id'=>$stori->id])}}" class="col-md-6 cardstory border-0  m-3 p-0 lienactu"> 
    <div class="backgroundEffect"></div> 
    <div class="pic"> 
        <img src="{{asset('storage/image/'.$stori->image)}}"  class="img-fluid imgtrans" alt=""> 
        <div class="date"> 
            <span class="day">{{date('d', strtotime($stori->mission_date))}} </span> 
            <span class="month">{{date('m', strtotime($stori->mission_date))}}</span> 
            <span class="year">{{date('Y', strtotime($stori->mission_date))}}</span> 
            
        </div> 
    </div> 
        <div class="content"> 
            <p class="h-1 mt-4 Titretrans">{{$stori->title}}</p> 
            <p class="text-muted mt-3 text texttrans">{{ Str::limit($stori->description, 20) }}</p> 
            <div class="d-flex align-items-center justify-content-between mt-3 pb-3"> <div class="btn btn-primary">Voir plus<span class="fas fa-arrow-right"></span></div> 
            </div>
        
            
        </div> 
</a>
@endforeach 

</div>

</div>

</div>

<!--FIN CENTER-->


@endsection()