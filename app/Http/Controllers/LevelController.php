<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index(){
        $levels = level::get();
        return view('Level.index' , compact('levels'));
    }

    public function getSingle($id){
        $token = level::find($id);
        return view('Level.single' , compact('token'));
    }


    public function create(){
        return view('Level.new');
    }


    public function postNew(Request $r){
        level::create([
            'title' => $r->title
        ]);
        return redirect('/Level/')->withSuccess(['Level has been added successfully!']);
    }
}
