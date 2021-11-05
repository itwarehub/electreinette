@extends('parent')
@section('body')
@include('template-parts/header')

<div class="container-fluid donate_page mt-5 pt-5">
    <div class="row donate-form-row">
        <div class="offset-md-1 col-md-3 donate-form">
            <!-- donate start -->
        <div id="donate">
           <!-- <div class="text-center">-->
           <!--<a href="/"> <img class="img-responsive mt-4 donate-logo" src="{{ URL::to('/') }}/assets/img/logo_updated.jpeg" alt="">-->
           <!--</a>-->
           <!-- </div>-->
            <h3 class="text-center">Let's Fix</h3>
            <h3 class="text-center">California</h3>
            <hr>
            <div class="text-center">
                <a class="cl-black" href="{{ URL::to('/') }}/assets/Lorem_ipsum.pdf">Looking to Donate By Check? Download the Form Here.</a>
            </div>
            <!-- donate-form 1 -->
           
                <h3 class="">Donation amount*</h3>
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
                    <h3 class="">Donation type*</h3>
                    <label class="">
                    <input type="radio" name="donation_type" value="single" checked="checked" autocomplete="off" class="required">
                    One-Time
                    </label>
                    <!-- <label class="">
                        <input type="radio" name="donation_type" value="recurring" autocomplete="off" class="required">
                    Monthly
                    </label> -->
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif
                <div class="donate-submit">
                    <button class="btn btn-warning rounded-0" type="button" id="continue" autocomplete="off">Donate $5</button>
                    <p class="pt-3 text-center">Contributions are not tax deductible. The California Political Reform Act (Proposition 34) places limits on contributions to candidates for state office and imposes certain prohibitions. This request does not seek a contribution in excess of applicable limits or from prohibited sources. An individual, union, PAC, and other entities may contribute a maximum of $32,500 to the committee per election, primary and general.</p>
                </div>
                <!-- donate div closeup -->
            </div>
            <!-- end -->
            <!-- other fields -->
            <div class="d-none mt-3" id="form">
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form accept-charset="UTF-8" action="{{ route('stripe.post') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_0xI7zXyPNOUtr70pa5FXFipQ00gHhU8NAn" id="payment-form" method="post">
                {{ csrf_field() }}
                <p class="mb-2">Enter your contact information:</p>
                <!-- card 1 -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="form-row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" required name="first_name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" required name="last_name">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email*" required name="email">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Address*" required name="address">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Zip*" required name="zip">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="City*" required name="city">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="State*" required name="state">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone*" required name="phone">
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- card 1 end -->
                <p class="mb-2">Campaign finance law requires us to collect your employment information.</p>
                <!-- retired button -->
                <div class="form-group">
                    <label class="btn rounded-0 btn-block toggle-checkbox bg-black cl-white">
                        <i class="fa fa-fw"></i>
                        <input id="one" autocomplete="off" type="checkbox" value="1" name="retired" />
                        I'm retired.
                    </label>
                </div>
                <!-- card 2 -->
                <div id="emp_details" class="card mb-2 d-none">
                    <div class="card-body">
                        <div class="form-row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Employer*"  name="emp_name" id="emp_name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Occupation*"  name="emp_occupation" id="emp_occupation">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email*"  name="emp_email" id="emp_email">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Address*"  name="emp_address" id="emp_address">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Zip*"  name="emp_zip" id="emp_zip">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="City*"  name="emp_city" id="emp_city">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="State*"  name="emp_state" id="emp_state">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 end -->
                <p class="mb-2">Type Your Digital Signature to Continue*</p>
                    <div class="form-row mb-2">
                        <div class="col">
                        <input type="text" class="form-control" required name="digital_signature">
                        </div>
                    </div> 
                <!-- agreement -->
                <p>
                </p>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class='form-row row'>  
                            <div class='col form-group required'>
                                <label class='control-label'>Card Number</label> 
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>   
                        </div> 
                        <div class='form-row row'>
                           <div class='col-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> 
                              <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                           </div>
                           <div class='col-8 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> 
                              <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                           </div>
                           <div class='col-12 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> 
                              <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                           </div>
                        </div>
                        <input type="hidden" name="donate_rs" id="donate_rs">
                    </div>
                </div>
                <h4 class="h4 mb-2 text-warning font-weight-bold text-center p-2" id="total">Donate $5</h4>
                <!-- agreement button  -->
                 <div class="form-group">
                    <label class="btn rounded-0 btn-block toggle-checkbox bg-black cl-white" id="agree">
                        <i class="fa fa-fw"></i>
                        <input id="one" autocomplete="off" type="checkbox" required />
                        I agree to the terms above*
                    </label>
                </div>

                <div class='form-row row'>
                    <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'></div>
                    </div>
                </div>
                <!-- button -->
                <button class="btn btn-block mb-2 rounded-0 text-dark bg-black cl-white" type="submit"> Submit</button>
                <button class="btn btn-block mb-3 rounded-0 bg-black cl-white" id="back"> Back </button>
                <!--  -->
            </form>
            </div>
           
            <!-- other fields  -->
        </div>
        <div class="col-md-4">
             <!-- @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif -->
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
    
    <script>
        $(function() {
          $('form.require-validation').bind('submit', function(e) {
            var $form         = $(e.target).closest('form'),
                inputSelector = ['input[type=email]', 'input[type=password]',
                                 'input[type=text]', 'input[type=file]',
                                 'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault(); // cancel on first error
              }
            });
          });
        });

        $(function() {
              var $form = $("#payment-form");

              $form.on('submit', function(e) {
                if (!$form.data('cc-on-file')) {
                  e.preventDefault();
                  Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                  Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                  }, stripeResponseHandler);
                }
              });

              function stripeResponseHandler(status, response) {
                if (response.error) {
                  $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
                } else {
                  // token contains id, last4, and card type
                  var token = response['id'];
                  // insert the token into the form so it gets submitted to the server
                  $form.find('input[type=text]').empty();
                  $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                  //$form.get(0).submit();
                  document.getElementById("payment-form").submit();
                  return false;
                }
              }
            })
    </script>

@include('template-parts/footer')

@endsection

