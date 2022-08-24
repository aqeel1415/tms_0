<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_loan extends Model
{
    use HasFactory;

    protected $table = "asset_loans";
    protected $fillable = ['lent_amount',	'teacher_id'	,'student_id',	'unit_id',	'location_id',	'asset_id',	'status',	'loan_start_date',	'loan_return_date'];
}
