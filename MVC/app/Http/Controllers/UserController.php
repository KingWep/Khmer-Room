<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
    function index(){
        $students = [
            [
                "id" => 1,
                "name" => "Johnny",
                "age" => 20,
                "major" => "IT"
            ],
            [
                "id" => 2,
                "name" => "John",
                "age" => 20,
                "major" => "History"
            ],
            [
                "id" => 3,
                "name" => "JohnWickk",
                "age" => 24,
                "major" => "Math"
            ]
        ];
        return view('Table', compact("students"));
    }
    
}
