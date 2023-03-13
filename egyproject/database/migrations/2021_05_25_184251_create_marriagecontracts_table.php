<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriagecontractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriagecontracts', function (Blueprint $table) {
            $table->string('mc_name');
            $table->char('mc_id')->unique();
            $table->string('t_email');
            $table->string('mc_wife');
            $table->char('mc_wid');
            $table->string('mc_address');
            $table->char('mc_phone');
            $table->string('mc_photo');
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
        Schema::dropIfExists('marriagecontracts');
    }
}
