@extends('parent')
    @section('body')
    @include('template-parts/header')
    
    <div class="container-fluid">
                   
    <div class="row mt-5 pt-4 meet-reinette-header">
        <div class="col-md-6 px-0 meet-reinette-header-left d-flex justify-content-center align-items-center">
            <h1>MEET REINETTE</h1>
        </div>
        <div class="col-md-6 px-0 meet-reinette-header-right">
            <img class="img img-responsive img-thumbnail" src="{{ URL::to('/') }}/assets/img/meet-reinette-header.png">
        </div>
    </div>
    
    <div class="row meet-reinette-body">
        <div class="col-md-4 offset-md-4 meet-reinette-body-text">
            <h2>About Reinette</h2>
            <p class="meet-reinette-para">
                I am a fourth-generation Californian, born in San Francisco, adopted, and raised by my parents in the Sierra foothills. I spent my early years exploring the world, cultivating meaningful relationships, and gathering skills that would prepare me for the adventure of a lifetime. In 1994, I completed a solo winter expedition across Alaska which I filmed for National Geographic.
                <br><br>
                For the last 16 years, my focus has been on building up and investing in my hometown of Nevada City, California to be a more successful and resilient community. 
                <br><br>
                I am now fighting for you and the next seven generations of California by resurrecting values that protect children and our golden state.
            </p>
        </div>
        <div class="col-md-4 offset-md-4 px-0 meet-reinette-body-common-col meet-reinette-body-phtos">
            <div class="row">
                <div class="col-md-6 px-0 meet-reinette-body-phto-sigle">
                    <img class="img img-responsive img-thumbnail" src="{{ URL::to('/') }}/assets/img/meet-reinette-body1.png">
                </div>
                <div class="col-md-6 px-0 meet-reinette-body-phto-sigle">
                    <img class="img img-responsive img-thumbnail" src="{{ URL::to('/') }}/assets/img/meet-reinette-body2.png">
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-4 meet-reinette-body-common-col meet-reinette-body-text">
            <h2>Contract with Californians</h2>
            <p class="meet-reinette-para">
                My Contract with Californians (CWC) is a living document that embodies and celebrates the inherent value of always making decisions with an eye to the next seven generations and with an ear to our elders and the last seven generations. Focusing on what is best for our children and using the basic wisdom that we have acquired over time from previous generations provides us with the means to step out of our current destructive trajectory, set aside our differences, and realign our shared values and priorities.
            </p>
        </div>
    </div>
    
    
    <div class="row meet-reinette-boxes">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-2 offset-md-1 col-6">
                    <a class="text-decoration-none" href="/donate"> <h3 class="bg-white text-dark font-weight-bold text-decoration-non save_donate">$5</h3></a>
                </div>
                <div class="col-md-2 col-6">
                    <a class="text-decoration-none" href="/donate"> <h3 class="bg-white text-dark font-weight-bold text-decoration-non save_donate">$25</h3></a>
                </div>
                <div class="col-md-2 col-6">
                    <a class="text-decoration-none" href="/donate"> <h3 class="bg-white text-dark font-weight-bold text-decoration-non save_donate">$50</h3></a>
                </div>
                <div class="col-md-2 col-6">
                    <a class="text-decoration-none" href="/donate"> <h3 class="bg-white text-dark font-weight-bold text-decoration-non save_donate">$100</h3></a>
                </div>
                <div class="col-md-2 col-6 meet-reinette-other-box">
                    <a class="text-decoration-none" href="/donate"> <h3 class="bg-white text-dark font-weight-bold text-decoration-non save_donate">OTHER</h3></a>
                </div>
            </div>
        </div>
    </div>

               
    @include('template-parts/footer')
               
    </div>
@endsection
