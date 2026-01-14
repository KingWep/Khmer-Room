<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
   function display(){
        $address = "KP";
        if($address == "KP"){
            return view('nav.Home');
        }else{
            return("nh ort slanh yg teh");
        }
   }
}
