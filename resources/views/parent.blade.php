<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
<!--<meta name="viewport" content="width=device-width, initial-scale = 1.0, -->
<!--maximum-scale=1.0 />-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css//bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3999081043.js" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style4.css">-->
    <link rel="stylesheet" href="{{asset('assets/css/style4.css?v=').time()}}">
    <title>Reinette</title>
    
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href='{{ URL::to('/') }}/assets/font/CaliforniaGothic-Regular.ttf' rel='stylesheet'>
       <link href='{{ URL::to('/') }}/assets/font/Futura-Condensed-Medium.otf' rel='stylesheet'>
    
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
    <style>
    
        /*@font-face {*/
        /*  font-family: gothic;*/
        /*  src: url('{{ public_path('assets/font/"CaliforniaGothic-Regular".tff') }}');*/
        /*}*/
    
        .hide{
            display: none;
        }
        /*common*/
        a{
            text-decoration: none !important;
        }
        .bg-black{
            background-color: black !important;
        }
        .cl-white{
            color: white !important;
        }
        .cl-black{
            color: black !important;
        }
    
        /*navbar*/
        .donate-button{
            display: flex;
            height: 100%;
            padding-right: 3vw;
            padding-left: 3vw;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;

        }
        .donate-text{
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        
        /*hero*/
        .input-field{
            height: 65px;
        }
        .join-us{
            height: 65px;
            line-height: 50px;
        }
        .save_donate{
            height: 65px;
            line-height: 65px;
        }
        .hero-text{
            font-size: 42px;
            font-family: 'california_gothicregular',Arial,sans-serif;
            letter-spacing: 3px;
            padding: 5px;
        }
        .img-thumbnail{
            border: none;
            background-color: transparent;
        }
        .fa-social-icon{
            font-size: 40px;
            color: #ffc107;
        }
        
        /*the compaign*/
        #save_ca{
            min-height: 400px;
        }
        
        
        /*wake the bear*/
        .wake_bear-right p {
            white-space: pre;
        }
        
        
        
        /*boxex*/
        #boxes{
            min-height: 400px;
        }
        .boxes-left h1{
            font-size: 72px;
        }
        .boxes-right a{
            text-decoration: none;
        }
        
        
        /*contract*/
        #contract{
            min-height: 400px;
        }
        .contract-col p{
            /*white-space: pre;*/
        }
        
        
        /*for donate page*/
        .donate-form{
            background-color: #f5f7fa !important;
            /*background-color: white !important;*/
        }
        .donate-logo{
            width: 150px !important;
        }
        .text-decoration-none{
            text-decoration: none;
        }
        .btn.disabled, .btn:disabled{
            opacity: initial !important;
        }
        
        /*for donate page end*/
        
        
        /*meet reinette page*/
        .meet-reinette-header{
            /*min-height: 300px;*/
        }
        .meet-reinette-header-left{
            background: #f8f9fa;
        }
        .meet-reinette-body{
            padding-top: 80px;
            padding-bottom: 100px;
        }
        .meet-reinette-body-common-col{
            margin-top: 43px;
        }
        .meet-reinette-para{
            font-size: 18px;
        }
        .meet-reinette-boxes{
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #992420;
        }
        .meet-reinette-boxes h3{
            text-align: center;
        }
        
        /*meet reinette page end*/
        
        
        
        
        
        /*for client scree - small iphone*/
        @media only screen and (max-width: 320px){
            .hero-text{
                padding: 0 0 0 5px !important;
                margin-top: 1rem!important;
                font-size: 30px !important;
            }
            div.hero-text{
                /*margin-top: 100px !important;*/
            }
            .push-signature{
                width: 210px;
            }
        }
        
        
        
        
        
        /*for mobile devices*/
        @media only screen and (max-width: 479px) {
        
            .navbar-brand > img{
                width: 120px !important;
            }
           .donate-button{
               height: 76px !important;
           }
           .navbar-light .navbar-toggler{
               border-color: #f8f9fa !important;
           }
        
        
          .hero-mobile{
              display: block !important;
              height: 1150px !important;
          }
          .hero-desktop{
              display: none !important;
          }
          .hero-text{
              /*margin-top: 85px !important;*/
          }
          .hero-text-row{
              margin-top: 60px;
          }
          .hero-form-row{
              /*margin-top: 150px;*/
              margin-top: 210px;
          }
          .hero-form {
            padding: 1.5rem!important;
            margin-top: 200px !important;
          }
          .join-us-row{
              margin-top: .25rem!important;
          }
          .hero-text{
              /*text-align: center;*/
              padding-left: 5px !important;
              font-size: 35px;
              letter-spacing: 0px !important;
          }
          .hero-parent-col{
              margin-top: 350px !important;
          }
          .hero{
              /*background: url('{{asset('assets/img/mobile.jpg')}}');*/
              /*background-position: 0 0,0 0,63% 0 !important;*/
              /*background-size: auto,auto,auto 75% !important;*/
              /*background-repeat: repeat,repeat,no-repeat !important;*/
              /*background: url('{{asset('assets/img/hero-mobile1.jpg')}}');*/
              /*background: url('{{asset('assets/img/hero-mobile2.jpg')}}');*/
              /*background: url('{{asset('assets/img/hero-mobile3.jpg')}}');*/
              background: url('{{asset('assets/img/hero-mobile4.jpeg')}}');
              background-position: 48% 100% !important;
              background-origin: content-box !important;
              
          }
          .wake_bear_mobile{
              display: flex !important;
          }
          .wake_bear_desktop{
              display: none;
          }
          #wake_bear{
              /*display: flex;*/
              /*flex-flow: column-reverse;*/
              margin-top: 0px !important;
          }
          .wake_bear-right{
              /*margin: 1rem!important;*/
              /*margin-top: 0px !important;*/
              /*padding: 1rem!important;*/
              
          }
          .wake_bear-right p{
              white-space: none !important;
              text-align: center !important;
          }
          .wake_bear-right h2{
              text-align: center !important;
          }
          .wake-the-bear-btn{
              text-align: center;
          }
          .wake_bear-left{
              margin-top: 48px;
          }
          .boxes-extra-col{
              display: none;
          }
          .boxes-heading{
              text-align: center;
          }
          .save_donate{
              height: 55px !important;
              line-height: 55px !important;
          }
          #boxes{
              margin-top: 3rem !important;
          }
          .boxes-right{
              padding-left: 3rem !important;
              padding-right: 3rem !important;
          }
          #save_ca{
              margin-top: 3rem !important;
          }
          .save_ca-left{
              margin: 1rem!important;
              padding: 3rem!important;
          }
          .save_ca-left p{
              text-align: left !important;
          }
          #ceo{
              margin-top: 3rem!important;
          }
          .ceo-right{
              padding: 0 48px 48px 48px !important;
          }
          #contract{
              margin-top: 3rem!important;
              /*padding: 1.5rem!important;*/
          }
          .footer{
              margin-top: 3rem;
              padding: 24px 48px 24px 48px !important;
          }
          .footer-logo img{
              width: 180px !important;
          }
          .footer-ul-social{
              text-align: center !important;
          }
          .footer-ul-social li{
              display: inline !important;
              margin-right: 1.5rem!important;
          }
          .donate-form-row{
              margin-top: 40px !important;
          }
          
          
          
          /*meet reinette page*/
          
          .meet-reinette-header{
              margin-top: 65px !important;
          }
          .meet-reinette-header-left{
              min-height: 275px;
          }
          .meet-reinette-body-phtos, .meet-reinette-body-phto-sigle{
              padding-left: 15px !important;
              padding-right: 15px !important;
          }
          .meet-reinette-other-box{
              display: none;
          }
          .meet-reinette-body-text h2, .meet-reinette-body-text p{
              padding: 0.25rem;
          }
          
          /*meet reinette page end*/
          
          
          
        }
        
    
    
    
        body {
            /*font-family: "Futura-Condensed", Futura, sans-serif;*/
            background-color: white !important;
        }
        
        h1, h2, h3, h4, h5, h6, .btn, .nav-link, .footer-ul li, .footer-p{
            font-family: 'california_gothicregular',Arial,sans-serif;
        }
        p{
            font-family: 'futura_condensed_bqregular',Arial,sans-serif;
        }
        /*.form-block{*/
        /*    max-width: 400px;*/
        /*}*/
        /*.w-form{*/
        /*    margin: 0 0 15px;   */
        /*}*/
        /*.horizontal-field-wrap{*/
        /*    margin-bottom: 10px;*/
        /*}*/
        /*.text-field{*/
        /*    height: 65px;*/
        /*    margin-bottom: 0;*/
        /*    padding-right: 5px;*/
        /*    padding-left: 21px;*/
        /*    border: 0 #000;*/
        /*    border-radius: 0;*/
        /*}*/
        /*.w-input{*/
        /*    display: block;*/
        /*    width: 100%;*/
        /*    height: 38px;*/
        /*    padding: 8px 12px;*/
        /*    margin-bottom: 10px;*/
        /*    font-size: 14px;*/
        /*    line-height: 1.42857143;*/
        /*    color: #333;*/
        /*    vertical-align: middle;*/
        /*    background-color: #fff;*/
        /*    border: 1px solid #ccc;*/
        /*}*/
        /*.vertical-line{*/
        /*    width: 1px;*/
        /*    margin-top: 8px;*/
        /*    margin-bottom: 8px;*/
        /*    margin-left: -1px;*/
        /*    border-right: 1px solid rgba(32,57,111,.1);*/

        /*}*/
        /*.text-field.zip{*/
        /*        width: 40%;*/
        /*        -webkit-box-flex: 0;*/
        /*        -webkit-flex: 0 0 auto;*/
        /*        -ms-flex: 0 0 auto;*/
        /*        flex: 0 0 auto;*/

        /*}*/
        
        
        
        
</style>

  </head>
  <!--<body class="bg-light">-->
    <body>
    @yield('body')

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::to('/') }}/assets/js/jquery.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/poper.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/custom.js"></script>
    
    
    <script>
    
    // $( document ).ready(function() {
        
    //     var url1 = "{{asset('assets/img/image-000.png')}}";
    //     var url2 = "{{asset('assets/img/9.jpg')}}";
    //     var urls = [url1, url2];
        
    //     var coutt = 1;
        
    //     $('.hero').css('background-image', 'url("' + urls[0] + '")');
    //     setInterval(function() {
    //         $('.hero').css('background-image', 'url("' + urls[coutt] + '")');
    //         coutt == urls.length-1 ? coutt = 0 : coutt++;
    //     }, 5000);
    
        
        
    // });
    
    
    
    // check if navebar collapse opens or close - hide/show Donate button
    $('.navbar-toggler').click(function(){
        if(!$(".navbar-collapse").hasClass('show')){
            // alert("Uncollapsed");
            $('.donate-button').hide(3000);
        }
        else {
            // alert("Collapsed");
            setTimeout(function(){ $('.donate-button').show(3000); }, 1000);

        }
    })
    </script>
    
  </body>
  
  
  
</html>