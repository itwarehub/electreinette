<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use\Validator;
use\Auth;
use Illuminate\Support\Arr;

class MainController extends Controller
{
   function donate(){
        return view('template-parts/donate');
    }

}