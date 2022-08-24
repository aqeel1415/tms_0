<?php

namespace App\Http\Controllers;

use App\Models\asset_loan;
use Illuminate\Http\Request;

class AssetLoanController extends Controller
{
    public function index(){
        $AssetLoans = asset_loan::get();
        return view('AssetLoan.index' , compact('AssetLoans'));
    }

    public function getSingle($id){
        $token = asset_loan::find($id);
        return view('AssetLoan.single' , compact('token'));
    }


    public function create(){
        return view('AssetLoan.new');
    }


    public function postNew(Request $r){
        asset_loan::create([
            'teacher_id' => $r->teacher_id,
            'student_id' => $r->student_id,
            'lent_amount'=> $r->lent_amount,
            'unit_id' => $r->unit_id,
            'asset_id' => $r->asset_id,
            'loan_start_date' => $r->loan_start_date,
            'loan_return_date' =>  $r->loan_start_date

        ]);

        return redirect('/AssetLoan/')->withSuccess(['Asset Loan has been added successfully!']);
    }
}
