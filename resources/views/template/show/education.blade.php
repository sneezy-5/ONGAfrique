@extends('base.voirplus')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')
@section('voirplus')

     <!--CENTER-->

  <div class="center row">
    <hr>

    <div class="card mb-3" style="width: 100rem;margin-top: 100px;">
        <div class="row g-0 ">
          <div class="col-md-4">
            <img src="#" class="img-fluid rounded-start imgdesc" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-dark h1 titredesc" style="font-weight:700;">{{$education->title}}</h5>
                <footer class="blockquote-footer mt-0">Partager le<cite title="Source Title" class="fw-bold text-dark"> <span> {{$education->created_at}}</span> </cite></footer>
               <p class="card-text textedesc">
               
               {{$education->description}}
              </p>
              
            </div>
          </div>
        </div>
      </div>



  </div>

     <!--FIN CENTER-->

@endsection