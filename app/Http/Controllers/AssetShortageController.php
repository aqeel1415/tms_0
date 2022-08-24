<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\asset_shortage;
use App\Models\chapter_asset;
use Illuminate\Http\Request;

class AssetShortageController extends Controller
{
    public function index(){
        $AssetShortages = asset_shortage::get();
        return view('AssetShortage.index' , compact('AssetShortages'));
    }
    public function getSingle($id){
        $token = asset_shortage::find($id);
        return view('AssetShortage.single' , compact('token'));
    }


    public function create(){
        return view('AssetShortage.new');
    }


    public function postNew(Request $r){
        asset_shortage::create([
            'asset_id' => $r->asset_id,
            'required_amount' => $r->quantity,
        ]);
        return redirect('/AssetShortage/')->withSuccess(['Asset Shortage has been added Successfully']);
    }

}
