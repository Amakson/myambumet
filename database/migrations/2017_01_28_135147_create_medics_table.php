<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('photo_id');
            $table->string('Name');
            $table->string('Username');
            $table->string('Address');
            $table->string('Location');
            $table->string('Email');
            $table->text('Tel');
            $table->string('Cert_Level');
            $table->text('Licence_Nunber');
            $table->string('Availability');
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
        Schema::dropIfExists('medics');
    }
}
