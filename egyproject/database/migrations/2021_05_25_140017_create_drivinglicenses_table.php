<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivinglicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivinglicenses', function (Blueprint $table) {
            $table->string('dl_name');
            $table->char('dl_id')->unique();
            $table->string('t_email');
            $table->string('dl_type');
            $table->string('dl_address');
            $table->char('dl_phone');
            $table->string('dl_photo');
            $table->string('dl_photo2');
            $table->string('dl_photo3');
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
        Schema::dropIfExists('drivinglicenses');
    }
}
