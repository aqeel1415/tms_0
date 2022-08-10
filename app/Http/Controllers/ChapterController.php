<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{

    public function index(){
        $Chapters = Chapter::all()->get();
        return view('index' , compact('Chapters'));
    }
/*
    public function getSingle($id){
        $Article = chapter::find($id);
        return view('single' , compact('Article'));
    }

    public function getNew(){
        return view('new');
    }

    public function postNew(Request $r){
        $NewArticle = new chapter;
        $NewArticle->title = $r->title;
        $NewArticle->description = $r->description;
        $NewArticle->save();
        return back();
    }
*/
}
