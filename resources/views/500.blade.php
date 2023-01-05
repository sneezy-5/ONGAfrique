@extends('base.cultureapp')


@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('culture')




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
    <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center row">
                <div class=" col-md-6">
                    <img src="{{asset('styles/img/5221808.jpg')}}">
                </div>
                <div class=" col-md-6 mt-5">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Erreur 500 actualisez la page ou contactez le concepteur</p>
                  
                    <a href="{{route('/')}}" class="btn btn-primary">Go Home</a>
                </div>

            </div>
        </div>
   
      <!-- <h1 class=" m-4 text-dark " style="font-weight:700 ;text-align: center;">Erreur 500 actualiser la page ou contacter l'admin</h1> -->





   
</div>

     <!--FIN CENTER-->


@endsection


