<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chapter;



class ChapterController extends Controller
{

    public function index(){
        $chapters = chapter::get();
        return view('Chapter.index' , compact('chapters'));
    }

    public function getSingle($id){
        $token = chapter::find($id);
        return view('Chapter.single' , compact('token'));
    }


    public function getNew(){
        return view('Chapter.index');
    }


    public function postNew(Request $r){
        /*
        chapter::create([
        'title' => $r->title
        ]);
        return 'Chapter has been added ';*/
        return $r;
    }

}
