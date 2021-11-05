<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use\Validator;
use\Auth;
use Illuminate\Support\Arr;

class ClearController extends Controller
{
   function clear(){
        
        \Artisan::call('cache:clear');
        \Artisan::call('route:clear');
        \Artisan::call('config:clear');
        \Artisan::call('view:clear');
        \Artisan::call('config:cache');
        dd('all done');
    }

}