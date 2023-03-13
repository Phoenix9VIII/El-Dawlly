<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthcertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birthcertificates', function (Blueprint $table) {
            $table->string('bc_name');
            $table->string('bc_id')->unique();
            $table->string('t_email');
            $table->string('bc_type');
            $table->char('bc_gender');
            $table->string('bc_address');
            $table->char('bc_phone');
            $table->string('bc_mother');
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
        Schema::dropIfExists('birthcertificates');
    }
}
