<!-- desktop hero section -->
<div class="container-fluid pt-4 mt-5 hero hero-desktop">
   <div class="row h-100">
      <div class="offset-md-1 col-md-7 my-auto hero-parent-col">
         <h1 class="hero-text mt-3 pt-2" style="line-height:5px;">
            <b>I am not a Democrat.</b>
         </h1>
         <h1 class="hero-text">
         <b>I am not a Republican.</b>
         </h1>
         <h1 class="hero-text" style="line-height:5px;">
         <b>I am a Californian.</b>
         </h1>
        
           @if($message=Session::get('success'))
         <div class="row mt-2">
           <div class="col-md-5">
           <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><p>{{$message}}</p></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           </div>
         </div>
         
          @endif
          @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="row mt-2">
              <div class="col-md-5">
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><p>{{ $error }}</p></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              </div>
            </div>
           
            @endforeach
          @endif
      
        <form class="mt-4 hero-form" method="POST" action="/join">
            @csrf
          <div class="row">
            <div class="col-md-3 col-8 hero-form-email">
              <input type="email" required class="form-control input-field" name="email" placeholder="Email">
            </div>
            <div class="col-md-2 col-4 hero-form-zip">
              <input type="number" required class="form-control input-field" name="zip" placeholder="ZIP">
            </div>
          </div>
          <div class="row mt-3 join-us-row">
            <div class="col-md-5"><button class="btn btn-warning btn-block rounded-0 join-us" type="submit">JOIN US</button></div>
        </div>
        <div class="row mt-3 hero-social-row">
            <div class="col-md-5 px-0 text-center">
                <a href="https://mobile.twitter.com/ReinetteSenum" target="_blank" class="social-icon-contain w-inline-block">
                    <i class="fab fa-twitter fa-social-icon"></i>
                </a>
                <a href="https://instagram.com/reinettesenum?utm_medium=copy_link" target="_blank" class="social-icon-contain w-inline-block pl-4 pr-4">
                    <i class="fab fa-instagram fa-social-icon"></i>
                </a>
                <a href="https://www.facebook.com/reinettesenum" target="_blank" class="social-icon-contain w-inline-block">
                    <i class="fab fa-facebook fa-social-icon"></i>
                </a>
                
            </div>
        </div>
        </form> 
         
         
      </div>
   </div>
</div>



<!-- Mobile hero section -->
<!--<div class="container-fluid pt-4 mt-5 hero hero-mobile d-none">-->
<!--   <div class="row h-100">-->
<!--      <div class="offset-md-1 col-md-7 my-auto hero-text">-->
<!--          <h1 class="hero-text mt-3 pt-2" style="line-height:5px;">-->
<!--            <b>I am not a Democrat.</b>-->
<!--         </h1>-->
<!--         <h1 class="hero-text">-->
<!--         <b>I am not a Republican.</b>-->
<!--         </h1>-->
<!--         <h1 class="hero-text" style="line-height:5px;">-->
<!--         <b>I am a Californian.</b>-->
<!--         </h1>-->
<!--      </div>-->
<!--      <div class="offset-md-1 col-md-7 hero-form">-->
<!--          <form class="mt-4 hero-form">-->
<!--          <div class="row">-->
<!--            <div class="col-md-3 col-8 px-0">-->
<!--              <input type="text" class="form-control input-field" placeholder="Email">-->
<!--            </div>-->
<!--            <div class="col-md-2 col-4 px-0">-->
<!--              <input type="number" class="form-control input-field" placeholder="ZIP">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="row mt-3 join-us-row">-->
<!--            <div class="col-md-5 px-0"><a href="/donate" class="btn btn-warning btn-block rounded-0 join-us">JOIN US</a></div>-->
<!--        </div>-->
<!--        <div class="row mt-3 hero-social-row">-->
<!--            <div class="col-md-5 px-0 text-center">-->
<!--                <a href="https://mobile.twitter.com/ReinetteSenum" target="_blank" class="social-icon-contain w-inline-block">-->
<!--                    <i class="fab fa-twitter fa-social-icon"></i>-->
<!--                </a>-->
<!--                <a href="https://instagram.com/reinettesenum?utm_medium=copy_link" target="_blank" class="social-icon-contain w-inline-block pl-4 pr-4">-->
<!--                    <i class="fab fa-instagram fa-social-icon"></i>-->
<!--                </a>-->
<!--                <a href="https://www.facebook.com/reinettesenum" target="_blank" class="social-icon-contain w-inline-block">-->
<!--                    <i class="fab fa-facebook fa-social-icon"></i>-->
<!--                </a>-->
                
<!--            </div>-->
<!--        </div>-->
<!--        </form> -->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->



<!--<div class="container-fluid pt-4 mt-5 hero hero-mobile d-none">-->
<!--   <div class="row hero-text-row">-->
<!--      <div class="offset-md-1 col-md-7 my-auto hero-text">-->
<!--          <h1 class="hero-text mt-3 pt-2" style="line-height:5px;">-->
<!--            <b>I am not a Democrat.</b>-->
<!--         </h1>-->
<!--         <h1 class="hero-text">-->
<!--         <b>I am not a Republican.</b>-->
<!--         </h1>-->
<!--         <h1 class="hero-text" style="line-height:5px;">-->
<!--         <b>I am a Californian.</b>-->
<!--         </h1>-->
<!--      </div>-->
      
<!--   </div>-->
   
<!--   <div class="row hero-form-row">-->
<!--     <div class="offset-md-1 col-md-7 hero-form">-->
<!--          <form class="mt-4 hero-form">-->
<!--          <div class="row">-->
<!--            <div class="col-md-3 col-8 px-0">-->
<!--              <input type="text" class="form-control input-field" placeholder="Email">-->
<!--            </div>-->
<!--            <div class="col-md-2 col-4 px-0">-->
<!--              <input type="number" class="form-control input-field" placeholder="ZIP">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="row mt-3 join-us-row">-->
<!--            <div class="col-md-5 px-0"><a href="/donate" class="btn btn-warning btn-block rounded-0 join-us">JOIN US</a></div>-->
<!--        </div>-->
<!--        <div class="row mt-3 hero-social-row">-->
<!--            <div class="col-md-5 px-0 text-center">-->
<!--                <a href="https://mobile.twitter.com/ReinetteSenum" target="_blank" class="social-icon-contain w-inline-block">-->
<!--                    <i class="fab fa-twitter fa-social-icon"></i>-->
<!--                </a>-->
<!--                <a href="https://instagram.com/reinettesenum?utm_medium=copy_link" target="_blank" class="social-icon-contain w-inline-block pl-4 pr-4">-->
<!--                    <i class="fab fa-instagram fa-social-icon"></i>-->
<!--                </a>-->
<!--                <a href="https://www.facebook.com/reinettesenum" target="_blank" class="social-icon-contain w-inline-block">-->
<!--                    <i class="fab fa-facebook fa-social-icon"></i>-->
<!--                </a>-->
                
<!--            </div>-->
<!--        </div>-->
<!--        </form> -->
<!--      </div>-->
<!--   </div>-->
   
   
<!--</div>-->


    
<div class="row pt-4 mt-5 hero hero-mobile d-none">
<div class="col-12">
        
   <div class="row hero-text-row">
      <div class="offset-md-1 col-md-7 my-auto hero-text">
          <h1 class="hero-text mt-3 pt-2" style="line-height:5px;">
            <b>I am not a Democrat.</b>
         </h1>
         <h1 class="hero-text">
         <b>I am not a Republican.</b>
         </h1>
         <h1 class="hero-text" style="line-height:5px;">
         <b>I am a Californian.</b>
         </h1>
      </div>
      
   </div>
   
   <div class="row hero-form-row">
     <div class="offset-md-1 col-md-7 hero-form">
            @if($message=Session::get('success'))
         <div class="row mt-2">
           <div class="col-md-12">
           <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><p>{{$message}}</p></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           </div>
         </div>
         
          @endif
          @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="row mt-2">
              <div class="col-md-12">
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><p>{{ $error }}</p></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              </div>
            </div>
           
            @endforeach
          @endif
          
          <form class="mt-4 hero-form" method="POST" action="/join">
              @csrf
          <div class="row">
            <div class="col-md-3 col-8 px-0">
              <input type="email" class="form-control input-field" required name="email" placeholder="Email">
            </div>
            <div class="col-md-2 col-4 px-0">
              <input type="number" class="form-control input-field" required name="zip"placeholder="ZIP">
            </div>
          </div>
          <div class="row mt-3 join-us-row">
            <div class="col-md-5 px-0"><a href="/donate" class="btn btn-warning btn-block rounded-0 join-us">JOIN US</a></div>
        </div>
        <div class="row mt-3 hero-social-row">
            <div class="col-md-5 px-0 text-center">
                <a href="https://mobile.twitter.com/ReinetteSenum" target="_blank" class="social-icon-contain w-inline-block">
                    <i class="fab fa-twitter fa-social-icon"></i>
                </a>
                <a href="https://instagram.com/reinettesenum?utm_medium=copy_link" target="_blank" class="social-icon-contain w-inline-block pl-4 pr-4">
                    <i class="fab fa-instagram fa-social-icon"></i>
                </a>
                <a href="https://www.facebook.com/reinettesenum" target="_blank" class="social-icon-contain w-inline-block">
                    <i class="fab fa-facebook fa-social-icon"></i>
                </a>
                
            </div>
        </div>
        </form> 
      </div>
   </div>
   
  </div>
  </div>
   
