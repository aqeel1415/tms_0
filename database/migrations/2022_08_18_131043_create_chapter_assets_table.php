<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_assets', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('assigned_amount');
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('chapter_id')->unsigned()->nullable();
            $table->integer('asset_id')->unsigned()->nullable();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
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
        Schema::dropIfExists('chapter_assets');
    }
}
