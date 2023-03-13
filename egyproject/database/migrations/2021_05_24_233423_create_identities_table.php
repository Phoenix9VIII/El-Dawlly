<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->string('i_name');
            $table->char('i_id')->unique();
            $table->string('t_email');
            $table->string('i_type');
            $table->char('i_gender');
            $table->char('i_phone');
            $table->string('i_address');
            $table->string('i_photo');
            $table->string('i_photo2');
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
        Schema::dropIfExists('identities');
    }
}
