<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathcertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deathcertificates', function (Blueprint $table) {
            $table->string('ds_name');
            $table->char('ds_id')->unique();
            $table->string('t_email');
            $table->string('ds_date');
            $table->string('ds_address');
            $table->char('ds_phone');
            $table->string('ds_photo');
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
        Schema::dropIfExists('deathcertificates');
    }
}
