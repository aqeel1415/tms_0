<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\asset_location;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(){
        $Assets = asset::get();
        return view('Asset.index' , compact('Assets'));
    }

    public function getSingle($id){
        $token = asset::find($id);
        return view('Asset.single' , compact('token'));
    }


    public function create(){
        return view('Asset.new');
    }


    public function postNew(Request $r){
        asset::create([
            'name' => $r->name,
            'type' => 'cunsumable',
            'quantity' => $r->quantity,
            'code_id' => '0',
            'color' => '0',
            'status' => '0',
            'img' => '0',
            'remarks' => '0',
        ]);

        return redirect('/Asset/')->withSuccess(['Asset has been added Successfully !']);
    }
}
