<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->integer('consum_asst_amount');
            $table->integer('consum_asst_amount_limit');
            $table->integer('unconsum_asst_amount');
            $table->integer('unconsum_asst_amount_limit');
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
        Schema::dropIfExists('teachers');
    }
}
