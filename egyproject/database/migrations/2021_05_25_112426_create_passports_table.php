<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->string('p_name');
            $table->char('p_id')->unique();
            $table->string('t_email');
            $table->string('p_religion');
            $table->char('p_gender');
            $table->char('p_phone');
            $table->string('p_address');
            $table->string('p_work');
            $table->string('p_photo');
            $table->string('p_photo2');
            $table->string('p_photo3');
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
        Schema::dropIfExists('passports');
    }
}
