<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherController extends Controller
{
    public function index(){
        $teacher = teacher::get();
        return view('Teacher.index' , compact('teacher'));
    }

    public function getSingle($id){
        $token = teacher::find($id);
        return view('Teacher.single' , compact('token'));
    }


    public function create(){
        return view('Teacher.new');
    }


    public function postNew(Request $r){
        teacher::create([
            'title' => $r->title
        ]);
        return 'Teacher has been added Successfully';
    }
}
