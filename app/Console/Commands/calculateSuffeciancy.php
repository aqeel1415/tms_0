<?php

namespace App\Console\Commands;

use App\Models\asset_shortage;
use App\Models\chapter;
use App\Models\chapter_asset;
use App\Models\level;
use App\Models\student;
use Illuminate\Console\Command;

class calculateSuffeciancy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:sufficiancy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this function to recalculate sufficiancy of all assets to fulfil students needs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $r_ass = asset_shortage::where('id',1)->get();{
            foreach($r_ass as $as){
                $as->update(['required_amount'=> 200]);
                $chapters = tms_db::table('students')
                    ->select(tms_db::raw('count(*) as students_count, chapter_id'))
                    ->groupBy('chapter_id')
                    ->get();
            }
        }
    }
}
