<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivorcecertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divorcecertificates', function (Blueprint $table) {
            $table->string('dc_name');
            $table->char('dc_id')->unique();
            $table->string('t_email');
            $table->string('dc_wife');
            $table->char('dc_wid')->unique();
            $table->string('dc_address');
            $table->string('dc_phone');
            $table->string('dc_date');
            $table->string('dc_photo');
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
        Schema::dropIfExists('divorcecertificates');
    }
}
