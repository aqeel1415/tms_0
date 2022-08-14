<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;


class StudentController extends Controller
{
    public function index(){
        $students = student::get();
        return view('Student.index' , compact('students'));
    }

    public function getSingle($id){
        $token = student::find($id);
        return view('Student.single' , compact('token'));
    }


    public function create(){
        return view('Student.new');
    }


    public function postNew(Request $r){
        student::create([
            'name' => $r->name,
            'phone' => $r->phone,
            'email' => $r->email
        ]);
        return 'Student has been added Successfully';
    }
}


