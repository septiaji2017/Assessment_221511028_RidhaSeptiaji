<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->string('KodeNota')->primary();
            $table->string('KodeTenan');
            $table->string('KodeKasir');
            $table->date('TglNota');
            $table->time('JamNota');
            $table->integer('JumlahBelanja');
            $table->integer('diskon');
            $table->integer('total');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('KodeTenan')->references('KodeTenan')->on('tenan');
            $table->foreign('KodeKasir')->references('KodeKasir')->on('kasir');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
