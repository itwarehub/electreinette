@extends('parent')
@section('body')
@include('template-parts/header')
<div class="container-fluid donate_page mt-5 pt-5">
    <div class="row">
        <div class="offset-md-1 col-md-3 donate-form bg-dark">
            <!-- donate start -->
        <div id="donate">
            <div class="text-center">
           <a href="/"> <img class="img-responsive mt-4" src="{{ URL::to('/') }}/assets/img/logo.PNG" alt="">
           <!--<a href="/"> <img class="img-responsive mt-4" src="{{ URL::to('/') }}/assets/img/logo_updated.jpeg" alt="">-->
           </a>
            </div>
            <h3 class="text-center text-white">Let's Fix</h3>
            <h3 class="text-center text-white">California</h3>
            <hr>
            <a class="text-warning" href="{{ URL::to('/') }}/assets/Lorem_ipsum.pdf">Looking to Donate By Check? Download the Form Here.</a>
            <!-- donate-form 1 -->
           
                <h3 class="text-white">Donation amount*</h3>
                <div class="donate-amount-box">
                    <div class="donate-amount">
                        <div class="denomination selected">
                            <input autocomplete="off" type="radio" name="amount" id="amount5" value="5" checked="">
                            <label for="amount5">$5</label>
                        </div>
                        <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount10" value="10">
                            <label for="amount10">$10</label>
                        </div>
                        <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount15" value="15">
                            <label for="amount15">$15</label>
                        </div>
                        <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount25" value="25">
                            <label for="amount25">$25</label>
                        </div>
                        <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount50" value="50">
                            <label for="amount50">$50</label>
                        </div>
                        <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount100" value="100">
                            <label for="amount100">$100</label>
                        </div>
                         <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount500" value="500">
                            <label for="amount500">$500</label>
                        </div>
                         <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount1000" value="1000">
                            <label for="amount1000">$1000</label>
                        </div>
                         <div class="denomination">
                            <input autocomplete="off" type="radio" name="amount" id="amount2500" value="2500">
                            <label for="amount2500">$2500</label>
                        </div>
                    </div>
                    <div class="denomination-other">
                        <input autocomplete="off" type="text" name="amount" value="" placeholder="Enter Other Amount">
                    </div>
                </div>
                <div class="donate-black donate-type">
                    <h3 class="text-white">Donation type*</h3>
                    <label class="text-white">
                    <input type="radio" name="donation_type" value="single" checked="checked" autocomplete="off" class="required">
                    One-Time
                    </label>
                    <label class="text-white">
                    <input type="radio" name="donation_type" value="recurring" autocomplete="off" class="required">
                    Monthly
                    </label>
                </div>
                <div class="donate-submit">
                    <button class="btn btn-warning rounded-0" type="submit" id="continue" autocomplete="off">Donate $5</button>
                    <p><small class="text-white">Contributions are not tax deductible. The California Political Reform Act (Proposition 34) places limits on contributions to candidates for state office and imposes certain prohibitions. This request does not seek a contribution in excess of applicable limits or from prohibited sources. An individual, union, PAC, and other entities may contribute a maximum of $32,500 to the committee per election, primary and general.</small></p>
                </div>
                <!-- donate div closeup -->
            </div>
            <!-- end -->
            <!-- other fields -->
            <div class="d-none mt-3" id="form">
            <form>
            <p class="mb-2 text-white">Enter your contact information:</p>
            <!-- card 1 -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="form-row mb-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                            <input type="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                            <input type="text" class="form-control" placeholder="Address*">
                            </div>
                            <div class="col-4">
                            <input type="text" class="form-control" placeholder="Zip*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                            <input type="text" class="form-control" placeholder="City*">
                            </div>
                            <div class="col-4">
                            <input type="text" class="form-control" placeholder="State*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Phone*">
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- card 1 end -->
                <p class="mb-2 text-white">Campaign finance law requires us to collect your employment information.</p>
                <!-- retired button -->
                <div class="form-group" data-toggle="buttons">
                    <label class="btn btn-info rounded-0 btn-block toggle-checkbox primary">
                        <i class="fa fa-fw"></i>
                        <input id="one" autocomplete="off" class="" type="checkbox" />
                        I'm retired.
                    </label>
                </div>
                <!-- card 2 -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="form-row mb-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Employer*">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Occupation*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                            <input type="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                            <input type="text" class="form-control" placeholder="Address*">
                            </div>
                            <div class="col-4">
                            <input type="text" class="form-control" placeholder="Zip*">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                            <input type="text" class="form-control" placeholder="City*">
                            </div>
                            <div class="col-4">
                            <input type="text" class="form-control" placeholder="State*">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 end -->
                <p class="mb-2 text-white">Type Your Digital Signature to Continue*</p>
                    <div class="form-row mb-2">
                        <div class="col">
                        <input type="text" class="form-control" >
                        </div>
                    </div> 
                <!-- agreement -->
                <p>
                </p>
                <span class="h4 mb-2 text-warning font-weight-bold" id="total">Donate $5</span>
                <!-- agreement button  -->
                 <div class="form-group" data-toggle="buttons">
                    <label class="btn btn-success rounded-0 btn-block toggle-checkbox primary" id="agree">
                        <i class="fa fa-fw"></i>
                        <input id="one" autocomplete="off" class="" type="checkbox" />
                        I agree to the terms above*
                    </label>
                </div>
                <!-- button -->
                <button class="btn btn-warning btn-block mb-2 rounded-0 text-dark" disabled id="submit" type="submit"> Submit</button>
                <button class="btn btn-block btn-danger mb-3 rounded-0" id="back"> Back </button>
                  
                
                <!--  -->
            </form>
            </div>
           
            <!-- other fields  -->
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>
@include('template-parts/footer')
@endsection
