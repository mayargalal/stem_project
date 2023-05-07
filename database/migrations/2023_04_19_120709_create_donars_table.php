<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donars', function (Blueprint $table) {
            $table->id();
            $table->string('mother_name_ar');
            $table->string('mother_name_en');
            $table->string('national_id');
            $table->string('nationality');
            $table->string('region');
            $table->string('blood_group');
            $table->date('date');
            $table->string('rh');
            $table->string('rh_first_system');
            $table->string('rh_second_system');
            $table->string('miner_group');
            $table->string('result');
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
        Schema::dropIfExists('donars');
    }
}
