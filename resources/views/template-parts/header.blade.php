<!-- nav bar -->
<div class="container-fluid bg-light" id="desktop-nav">
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="d-flex" id="dd-flex">
        <!--<a class="navbar-brand mr-0" href="/"><img src="{{ URL::to('/') }}/assets/img/logo_updated.jpeg" alt=""></a>-->
        <!--<a class="navbar-brand mr-0" href="/"><img src="{{ URL::to('/') }}/assets/img/header-logo.svg" alt=""></a>-->
        <a class="navbar-brand mr-0" href="/"><img src="{{ URL::to('/') }}/assets/img/header-logo-transfuck.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#save_ca">SAVE CA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/meet-reinette') }}">REINETTE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#wake_bear">WAKE THE BEAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#reinette">CWC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/shop')}}">SHOP</a>
          </li>
      <li class="nav-item">
            <a class="nav-link" href="{{url('/events')}}">EVENTS</a>
          </li>
        
        </ul>
    </div>
    <!--<a href="/donate" class="btn btn-warning rounded-0" >CONTRIBUTE</a>-->
    <a href="/donate" class="btn btn-warning rounded-0 donate-button"><div class="donate-text">DONATE</div></a>
   
    
</nav>
</div>
<!-- mobile nav  -->
<!--<div class="container-fluid bg-light" id="mobile-nav">-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >-->
<!--   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">-->
<!--   <span class="navbar-toggler-icon"></span>-->
<!--   </button>-->
<!--   <div class="collapse navbar-collapse" id="navbarTogglerDemo01">-->
<!--      <a class="navbar-brand" href="/"><img src="{{ URL::to('/') }}/assets/img/logo.PNG" alt=""></a>-->
<!--      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">-->
<!--      <li class="nav-item">-->
<!--            <a class="nav-link" href="{{  url('/') }}#save_ca">SAVE CA</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="{{  url('/') }}#reinette">REINETTE</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="{{  url('/') }}#wake_bear">WAKE THE BEAR</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="{{  url('/') }}#reinette">CWC</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="#">SHOP</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="#r">EVENTS</a>-->
<!--          </li>-->
<!--      </ul>-->
     
<!--   </div>-->
<!--   <a href="/donate" class="btn btn-warning rounded-0 float-right font-weight-bold" >DONATE</a>-->
  
  
<!--</nav>-->


<div class="container-fluid bg-light" id="mobile-nav">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
    <!--<a class="navbar-brand" href="/"><img src="{{ URL::to('/') }}/assets/img/logo_updated.jpeg" alt=""></a>-->
    <a class="navbar-brand" href="/"><img src="{{ URL::to('/') }}/assets/img/header-logo-transfuck.png" alt=""></a>
   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
      <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#save_ca">SAVE CA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/meet-reinette') }}">REINETTE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#wake_bear">WAKE THE BEAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  url('/') }}#reinette">CWC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/shop')}}">SHOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/events')}}">EVENTS</a>
          </li>
          <!--<li class="nav-item">-->
          <!--    <a href="/donate" class="nav-link btn btn-warning rounded-0 font-weight-bold" >DONATE</a>-->
          <!--</li>-->
      </ul>
     
   </div>
   <a href="/donate" class="btn btn-warning rounded-0 float-right donate-button"><div class="donate-text">DONATE</div></a>
  
  
</nav>




</div>

