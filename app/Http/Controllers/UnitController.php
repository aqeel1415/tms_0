<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unit;

class UnitController extends Controller
{
    public function index(){
        $units = unit::get();
        return view('Unit.index' , compact('units'));
    }

    public function getSingle($id){
        $token = unit::find($id);
        return view('Unit.single' , compact('token'));
    }


    public function create(){
        return view('Unit.new');
    }


    public function postNew(Request $r){
        unit::create([
            'title' => $r->title
        ]);
        return view('welcome');
    }
}
