<?php

namespace App\Http\Controllers;

use App\Models\asset_location;
use Illuminate\Http\Request;

class AssetLocationController extends Controller
{
    public function index(){
        $AssetLocations = asset_location::get();
        return view('AssetLocation.index' , compact('AssetLocations'));
    }

    public function getSingle($id){
        $token = asset_location::find($id);
        return view('Asset.single' , compact('token'));
    }


    public function create(){
        return view('Asset.new');
    }


    public function postNew(Request $r){
        asset_location::create([
            'asset_id' => $r->asset_id,
            'unit_id' => $r->unit_id,
            'location_id' => $r->location_id,
            'amount' => $r->amount,

        ]);

        return redirect('/AssetLocation/')->withSuccess(['Asset has been assigned Successfully to the location!']);
    }
}
