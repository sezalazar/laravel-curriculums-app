<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dni');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('marStatus', ['casado', 'soltero', 'divorciado', 'viudo', 'otro']);
            $table->date('dateOfBirth');
            $table->string('referredEmplid')->nullable();
            $table->string('referredName')->nullable();
            $table->boolean('driverLicence')->nullable();
            $table->boolean('carOwner')->nullable();
            $table->string('street')->nullable();
            $table->integer('streetNbr')->nullable();
            $table->string('provincia')->nullable();
            $table->string('cp')->nullable();
            $table->string('city')->nullable();
            $table->string('carrerSelected')->nullable();
            $table->integer('carrerLevel')->nullable();
            $table->integer('carrerAdvance')->nullable();
            $table->string('file_path');
            $table->string('filename');
            $table->string('user');
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
        Schema::dropIfExists('applicants');
    }
};
