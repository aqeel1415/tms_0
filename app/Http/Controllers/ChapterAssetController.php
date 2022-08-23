<?php

namespace App\Http\Controllers;

use App\Models\chapter_asset;
use Illuminate\Http\Request;

class ChapterAssetController extends Controller
{

    public function index(){
        $chapterAssets = chapter_asset::get();
        return view('ChapterAsset.index' , compact('chapterAssets'));
    }

    public function getSingle($id){
        $token = chapter_asset::find($id);
        return view('ChapterAsset.single' , compact('token'));
    }


    public function create(){
        return view('ChapterAsset.new');
    }


    public function postNew(Request $r){
        chapter_asset::create([
            'title' => $r->title
        ]);
        return 'Asset has been assigned Successfully to the chapter';
    }

}
