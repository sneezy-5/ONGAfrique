@extends('base.espacedonateur')

@section('donateur')

<div class="content mt-3">

           


<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <!-- <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div> -->
            <h4 class="mb-0">
                <span class="count">{{$countdon}}</span>
            </h4>
            <p class="text-light">{{__("nmbdon")}}</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
            <!-- <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div> -->
            <h4 class="mb-0">
                <span class="count">{{$sumdon}}</span>
            </h4>
            <p class="text-light">{{__("smmdon")}}</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <!-- <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            
            <h4 class="mb-0">
                <span class="count">0</span>
            </h4>
            <p class="text-light">{{__("chargemt")}}</p>

        </div>

        <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
        </div>
    </div> -->
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <!-- <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            
            <h4 class="mb-0">
                <span class="count">0 </span>
            </h4>
            <p class="text-light">{{__("chargemt")}}</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>

        </div>
    </div> -->
</div>
<!--/.col-->

<div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <a href="https://web.facebook.com/profile.php?id=100086654464545">
            <i class="fa fa-facebook"></i>
            <p style="color: black;">Suivez nos actualités sur Facebook</p>
        </a>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->
<div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <p style="color: black;">Laissez nous un mail</p>
    </div>
    <!--/social-box-->
</div>
</div>
       <div class="col-md-6 container-fluid m-2">
       <iframe class="container-fluid col-md" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100086654464545&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
  
 </div>
                    <!-- Modal don -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="{{asset('styles/img/logo.jpeg')}}" class="img-container" alt="" width="70" height="70">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__("FuD")}} </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row container-fluid justify-content-center  m-0">
      
        <div class="card m-2 mb-5 " style="width:25rem;">
          <img src="{{asset('styles/img/social/11.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{__("titrespecial")}}</h5>
            <p class="card-text">{{__("textspecial")}}</p>
          </div>
        </div>
  
        <div class="card m-2 mb-5 d-flex justify-content-between" style="width:20rem;">
  
        <!-- Nav pills -->
        <ul class="nav nav-pills bg-light justify-content-between">
          <li class="nav-item w-50 justify-content-center">
            <a class="nav-link active " data-bs-toggle="pill" href="#home">{{__("Dnf")}}</a>
          </li>
          @guest
          <li class="nav-item w-50 ">
            <a class="nav-link text-align-center" data-bs-toggle="pill" href="#menu1">{{__("mensuel")}}</a>
          </li>
          @endguest
        
  
        </ul>
  
  <!-- Tab panes -->
  <div class="tab-content justify-content-center align-items-center h-100">
  <div class="tab-pane card nav nav-pills active montant" id="home">
  
    <div  class="btn btn-light m-1 active btnprix" data-bs-toggle="pill">100fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">1000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">1500fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">2000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">5000fr</div>
    <div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">10000fr</div> 

    <div class="card text-danger border-0 ">
      <small class="msgalertprix card-text"></small>
      <small class="msgalertcontact card-text"></small>

    </div>

    <form action="{{route('faireundon.store')}}" method="POST" class="mt-3 m-1 justify-content-between formprixmodal">
      @csrf

        <div class="input-group mb-3">
          
         @if($user = Auth::user())
          <input type="text" name="last_name" value="{{$user->name}}" class="form-control casenom" placeholder="{{__("nomP")}}">
           @else
          <input type="text" name="last_name" class="form-control casenom" placeholder="{{__("nomP")}}">

         @endif
         

        </div>
  
        <div class="input-group mb-3">
          <input type="number" name="phone" class="form-control casecontact"  placeholder="{{__("contact")}}">
          
         </div>
         
      <div class="input-group mb-3">
        <span class="input-group-text">F CFA</span>
        <input type="number" name="amount" class="form-control caseprix" aria-label="Dollar amount (with dot and two decimal places)" value="500">
        
        <div id="validationServerUsernameFeedback" class="invalid-feedback" style="text-align:start;">
        {{__("montantSup")}}
        </div>
        <div class="valid-feedback" style="text-align:start;">
          Très bien
        </div>
      </div>
  
     <div>
  
      <p>
        <div class="form-check d-flex gap-2">
          <input class="form-check-input btncoche" type="checkbox" name="honneur" id="flexCheckDefault" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
          <label class="form-check-label" for="flexCheckDefault">
          {{__("honneur")}} 
          </label>
        </div>
  
      </p>
      <div class="collapse" id="collapseExample">
        <div class="form-group">
         <input type="text" name="honnoree" class="form-control specialchamp" placeholder="{{__("honneur")}}">
        </div>
      </div>
  
     </div>
  
      <input type="submit" value="{{__("FuD")}}" class="btn btn-primary w-100 mt-5 btnapi1">
    </form>
  </div>
  
  
  
@guest
  <div class="tab-pane container fade" id="menu1">
  
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="">
      <div class="card rounded-3">
        <img src="{{asset('styles/img/3.jpg')}}"
          class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
          alt="Sample photo">
        <div class="card-body ">
          <h3>{{__("Inscription")}}</h3>
           <small class="m-0 p-0  alertinscri" style="color: red;"></small>

          <form action="{{route('register')}}" method="post" class="px-md-2 mt-2 forminscrimodal">
            @csrf
            <div class="form-outline mb-1">
              <label class="form-label" for="nom">{{__("nomP")}}</label>
              <input type="text" name="name" id="nom" class="form-control iptinscript1"/>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="mail">{{__("mail")}}</label>
              <input type="email" name="email" id="mail" class="form-control iptinscript2 un"/>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="chiffre">{{__("choix")}}</label>

              <select class="form-select chiffreinscri" name="amount" aria-label="Default select example">

                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
              </select>

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="pass">{{__("password")}}</label>
              <input type="password" name="password" id="pass" class="form-control iptinscript3 un"/>
              
              <label class="form-label" for="pass">{{__("confirm_pass")}}</label>
              <input type="password" name="password_confirmation" id="pass" class="form-control iptinscript3 un"/>

            </div>

            <button type="submit" class="btn btn-success mb-1">{{__("Inscription")}}</button>

          </form>

        </div>
      </div>
    </div>
  </div>

</div>
  @endguest

  </div>
  
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__("fermer")}}</button>
      </div>
    </div>
  </div>
  </div>

  <!--fin modal-->

  
<!-- <div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <span class="count">30</span> k
                <span>friends</span>
            </li>
            <li>
                <span class="count">450</span>
                <span>tweets</span>
            </li>
        </ul>
    </div>
    /social-box
</div> 



<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <span class="count">40</span> +
                <span>contacts</span>
            </li>
            <li>
                <span class="count">250</span>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    /social-box-
</div> -->
<!--/.col-->



<!--/.col-->








</div> <!-- .content -->

@endsection