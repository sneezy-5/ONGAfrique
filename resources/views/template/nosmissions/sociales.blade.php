@extends('base.socialeapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('social')

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

<h1 class=" m-4 text-dark " style="font-weight:700 ;text-align: center;">Visitez nos activités sociales</h1>
@foreach($sociales as $soc)
<div class="imgzoom card m-3 mb-3 mt-3 p-1"  style="width:18rem;">
<!-- Trigger the Modal -->
<img class="myImg imgtrans" src="{{asset('storage/image/'.$stori->image)}}" alt="Snow" style="width:100%;max-width:300px">


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
<h4 class="card-title Titretrans">{{$soc->title}}</h4>
<p class="card-text text-dark texttrans txtcarac">
{{ Str::limit($soc->description, 20) }} 
</p>
<a href="{{route('voirsociale',['id'=>$soc->id])}}" class="btn btn-primary btntrans">Voir plus..</a>

</div>

</div>
@endforeach


           

</div>


<div class="parentblocdeo ">

<h1 class=" m-4 text-dark" style="font-weight:700 ; text-align: center;">Journée Mondiale de la Paix</h1> 

<div class="card-body w-75">
<p class="card-text m-2 col-md">
Le Jeudi 03 novembre  2022  les membres de L’ONG SOURIRE D’AFRIQUE ont effectué une visite à la maison de correction et d’arrêt de TIASSALE pour des dons en vivre et non vivre (03 sacs de riz de 50 kg, 03 cartons de 60 savons (180), 02 sacs d’OMO (240 sachets) et des kits d’habits). 

Notre priorité, c'est d'apporter le sourire aux autres.car il y a plus de bonheur à donner qu'à recevoir.
</p>
</div>



<div class="carddeo row d-flex justify-content-center  mt-5">

@foreach($sociales as $soc)
<div class="card col-md-6 m-1" style="max-width:20rem; border: none; background: none;">
  <iframe class="container-fluid videoiframe" src="{{asset('storage/video/'. $soc->video)}}" frameborder="0"></iframe>

  <div class="card-title m-3">
      <span>Featured Video</span>
      <h4>Set for the Ashes</h4>
  </div>

</div>
@endforeach


</div>


</div>


<div class=" w-100  parentblocstory">
<h1 class=" m-4 text-dark h2" style="font-weight:700;text-align:center;">Nos story</h1> 

<div class="row w-100 mt-0 Storydiv"> 



@foreach($stories as $story)
<a href="{{route('actualites.index')}}" class="col-md-6 cardstory border-0  m-3 p-0"> 
    <div class="backgroundEffect"></div> 
    <div class="pic"> 
        <img src="{{asset('storage/image/'.$story->image)}}"  class="img-fluid" alt=""> 
        <div class="date"> 
            <span class="day">{{date('d', strtotime($story->mission_date))}} </span> 
            <span class="month">{{date('m', strtotime($story->mission_date))}}</span> 
            <span class="year">{{date('Y', strtotime($story->mission_date))}}</span> 
        </div> 
    </div> 
        <div class="content"> 
            <p class="h-1 mt-4">{{$story->title}}</p> 
            <p class="text-muted mt-3">{{ Str::limit($story->description, 20) }}</p> 
            <div class="d-flex align-items-center justify-content-between mt-3 pb-3"> <div class="btn btn-primary">Voir plus<span class="fas fa-arrow-right"></span>
            </div> 
        </div> 
    </div> 
</a> 
@endforeach







</div>
</div>

</div>

<!--FIN CENTER-->


@endsection