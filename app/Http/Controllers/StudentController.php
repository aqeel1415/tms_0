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
        return redirect('/Student/')->withSuccess(['Student has been added successfully!']);
    }




    public function countByLevelsAndChapters(){

       /*
       //this is a way to access all DB table using DB facade Note: "use Illuminate\Support\Facades\DB;"
       $chapters = DB::table('chapters')->get();
        */

        $students= student::selectRaw('count(*) as students_count, chapter_id,level_id')
            ->groupByRaw('chapter_id')
            ->groupByRaw('level_id')
            ->get();

       return view('Student.count' , compact('students'));
       //return $students;
    }

}


