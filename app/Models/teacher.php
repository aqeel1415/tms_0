<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $table = "teachers";
    protected $fillable = ['name','phone','email','consum_asst_amount','consum_asst_amount_limit','unconsum_asst_amount','unconsum_asst_amount_limit'];
}
