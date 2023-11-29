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
        Schema::create('barang', function (Blueprint $table) {
            $table->string('KodeBarang', 25)->primary();
            $table->string('NamaBarang', 50);
            $table->string('Satuan', 25);
            $table->integer('HargaSatuan');
            $table->integer('Stok');  
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
