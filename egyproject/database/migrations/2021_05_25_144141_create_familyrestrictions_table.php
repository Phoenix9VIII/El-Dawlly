<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyrestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familyrestrictions', function (Blueprint $table) {
            $table->string('fr_name');
            $table->char('fr_id')->unique();
            $table->string('t_email');
            $table->string('fr_address');
            $table->char('fr_phone');
            $table->string('fr_photo');
            $table->string('fr_photo2');
            $table->string('fr_photo3');
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
        Schema::dropIfExists('familyrestrictions');
    }
}
