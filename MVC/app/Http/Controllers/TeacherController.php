<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        //select * from `table`
        $data = Teacher::all();
        return view("Teacher.Teacher Table", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Teacher.Teacher Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => ["required", "string"],
            "age" => ["required", "integer"],
            "gender" => ["required", "string"],
            "major" => ["required", "string"],
            "email" => ["required", "email"]
        ]);
        //insert into teacher ("name","subject")
        $insert = Teacher::create([
            "name" => request("name"),
            "age" => request("age"),
            "gender" => request("gender"),
            "major" => request("major"),
            "email" => request ("email")
        ]);
        if($insert){
            return redirect("/")->with("message", "Create user successfully");
        }else{
            return redirect("/create")->with("message","fail to add teacher");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //seecct * from Teacher where id = $id;
        $select = Teacher::find($id);
        return view("Teacher.Teacher Detail", compact("select"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //,
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $remove = Teacher::destroy($id);
        if($remove){
            return redirect("/")->with("message", "remove successfully");
        }
    }
}
