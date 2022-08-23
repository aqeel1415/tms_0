<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\chapter_asset;
use Illuminate\Http\Request;

class AssetShortageController extends Controller
{
    public function index(){
        $AssetShortages = chapter_asset::get();
        return view('AssetShortage.index' , compact('AssetShortages'));
    }
    public function getSingle($id){
        $token = chapter_asset::find($id);
        return view('AssetShortage.single' , compact('token'));
    }


    public function create(){
        return view('AssetShortage.new');
    }


    public function postNew(Request $r){
        chapter_asset::create([
            'level_id' => $r->title,
            'chapter_id' => $r->title,
            'quantity' => $r->title,
        ]);
        return 'Asset Shorted has been added Successfully';
    }

}
