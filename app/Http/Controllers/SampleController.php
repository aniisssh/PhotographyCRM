<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
   public function index(){
       return "<h1> You can only see this after authorize</h1>";
   }
}
