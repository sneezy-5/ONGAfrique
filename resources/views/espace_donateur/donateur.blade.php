@extends('base.espacedonateur')

@section('donateur')

<div class="content mt-3">

           


<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            
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
   
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
   
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