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
{{ Str::limit($soc->description, 10) }} 
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
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos harum delectus hic error labore at voluptatibus tempora, voluptate dolore. Quod, quo sit. Officia nihil quidem reprehenderit modi aliquid debitis quam!
  Molestiae eveniet iste deleniti eos maxime doloremque cupiditate nam, labore hic molestias dolorum animi incidunt nemo sunt, temporibus aut, dolorem dicta qui veniam voluptatem veritatis illum dolores ducimus similique? Quas!
  Quos officiis ratione optio neque rerum veritatis doloribus est, natus iusto exercitationem vel iure quis, libero adipisci alias omnis a velit aperiam voluptates eum iste dolorem culpa. Consequatur, facilis sint.
  Possimus aperiam, libero vitae laudantiuIllum similique possimus et, nemo ut iste! Minus sint, illo repudiandae aut ratione iure! Cumque maxime optio suscipit ullam vitae eius corporis molestiae est iure. Maiores aut libero fugit dicta!
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

<a href="#" class="col-md-6 cardstory border-0  m-3 p-0"> 
    <div class="backgroundEffect"></div> 
    <div class="pic"> 
        <img src="{{asset('styles/img/social/19.jpg')}}"  class="img-fluid" alt=""> 
        <div class="date"> 
            <span class="day">26</span> 
            <span class="month">Oct</span> 
            <span class="year">2022</span> 
        </div> 
    </div> 
        <div class="content"> 
            <p class="h-1 mt-4">Des enfants prise en charge</p> 
            <p class="text-muted mt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> 
            <div class="d-flex align-items-center justify-content-between mt-3 pb-3"> <div class="btn btn-primary">Voir plus<span class="fas fa-arrow-right"></span>
            </div> 
            <div class="d-flex align-items-center justify-content-center foot"> <p class="admin">Admin</p> <p class="ps-3 icon text-muted"><span class="fas fa-comment-alt pe-1"></span>3</p> </div> 
        </div> 
    </div> 
</a> 


<a href="#" class="col-md-6 cardstory border-0  m-3 p-0"> 
  <div class="backgroundEffect"></div> 
  <div class="pic"> 
      <img src="{{asset('styles/img/social/2.jpg')}}"  class="img-fluid" alt=""> 
      <div class="date"> 
          <span class="day">26</span> 
          <span class="month">Oct</span> 
          <span class="year">2022</span> 
      </div> 
  </div> 
      <div class="content"> 
          <p class="h-1 mt-4">Aidons les plus demunis</p> 
          <p class="text-muted mt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> 
          <div class="d-flex align-items-center justify-content-between mt-3 pb-3"> <div class="btn btn-primary">Voir plus<span class="fas fa-arrow-right"></span>
          </div> 
          <div class="d-flex align-items-center justify-content-center foot"> <p class="admin">Admin</p> <p class="ps-3 icon text-muted"><span class="fas fa-comment-alt pe-1"></span>3</p> </div> 
      </div> 
  </div> 
</a> 






</div>
</div>

</div>

<!--FIN CENTER-->


@endsection