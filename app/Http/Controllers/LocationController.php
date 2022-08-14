<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;


class LocationController extends Controller
{
    public function index(){
        $locations = location::get();
        return view('Location.index' , compact('locations'));
    }

    public function getSingle($id){
        $token = location::find($id);
        return view('Location.single' , compact('token'));
    }


    public function create(){
        return view('Location.new');
    }


    public function postNew(Request $r){
        location::create([
            'title' => $r->title
        ]);
        return 'Location has been added Successfully';
    }


}
