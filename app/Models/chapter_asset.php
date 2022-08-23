<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class chapter_asset extends Model
{
    use HasFactory;

    protected $table = "chapter_assets";
    protected $fillable = ['assigned_amount' , 'level_id' , 'chapter_id' , 'asset_id'];

}
