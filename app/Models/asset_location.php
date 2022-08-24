<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_location extends Model
{
    use HasFactory;

    protected $table = "asset_locations";
    protected $fillable = ['amount'	, 'unit_id'	, 'location_id'	,'asset_id'];
}
