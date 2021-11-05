<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use\Validator;
use\Auth;
use Illuminate\Support\Arr;
use App\join_us;
use Redirect;

use Session;
use Stripe;

use Mail;

class MainController extends Controller
{
    function donate(){
        return view('template-parts/donate');
    }
    
    function join_us(Request $request){
        $this->validate($request, [
            'email'    =>  'required|email',
            'zip'     =>  'required|regex:/\b\d{5}\b/'
        ]);
        $form_data = array(
            'email'    =>  $request->input('email'),
            'zip'     =>  $request->input('zip')
        );
        $records = join_us::where('email', $request->input('email'))->get();
        if(count($records)> 0){
            return Redirect::back()->withErrors(['msg' => 'Request already submitted!']);
        } else{
            join_us::create($form_data);
            return back()->with('success','You will get confirmation email from us.');
        }
    } 
    function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_w8RAG5LOGvA5qj3O4Yd8nLk400TZP26bcw');
        try {
            Stripe\Charge::create ([
                    "amount" => $request->donate_rs * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Donation Payment." 
            ]);
            
            $details = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'address' => $request->address,
                'zip' => $request->zip,
                'city'  => $request->city,
                'state' => $request->state,
                'phone' => $request->phone,
                'retired' => $request->retired,
                'emp_name' => $request->emp_name,
                'emp_occupation' => $request->emp_occupation,
                'emp_email' => $request->emp_email,
                'emp_address' => $request->emp_address,
                'emp_zip' => $request->emp_zip,
                'emp_city' => $request->emp_city,
                'emp_state'  => $request->emp_state,
                'digital_signature' => $request->digital_signature,
                'donate_rs' => $request->donate_rs
            ];
           

            Session::flash('success', 'Payment successful!');
            return back();
        }
        catch (\Exception $e) {
            Session::flash('success',  $e->getMessage());
            return back();
        }
          
        
    }
}