<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        $name = $req->name;
        $skills =json_encode($req->skills);
        $gender = $req->gender;
        DB::table('employees')->insert([
            'name' => $name,
            'skills' => $skills,
            'gender' => $gender
        ]);
        return redirect('all');
    }
    public function all(){
        $data=DB::table('employees')->get();
        return view('employee.all',['employees'=>$data]);
    }
    public function edit(){
        return view('employee.edit');
    }
}
