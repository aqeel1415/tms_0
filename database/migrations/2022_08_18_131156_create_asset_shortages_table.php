<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetShortagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_shortages', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('required_amount');
            $table->integer('asset_id')->unsigned()->nullable();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_shortages');
    }
}
