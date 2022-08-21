<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_shortage extends Model
{
    use HasFactory;


    protected $table = "asset_shortages";
    protected $fillable = ['required_amount'];
}
