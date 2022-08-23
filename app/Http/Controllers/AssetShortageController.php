<?php

namespace App\Http\Controllers;

use App\Models\asset;
use Illuminate\Http\Request;

class AssetShortageController extends Controller
{
    public function index(){
        $AssetShortages = asset::get();
        return view('AssetShortage.index' , compact('AssetShortages'));
    }

}
