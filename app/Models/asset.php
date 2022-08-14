<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','code_id','color','status','type','img','quantity','remarks'];
}
