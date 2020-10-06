<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto'); 
            $table->string('codigo', 30);
            $table->string('nombre', 30);
            $table->integer('id_sucursal');
            $table->integer('id_categoria');
            $table->integer('cantidad');
            $table->integer('precio');
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
        Schema::dropIfExists('producto'); 
    }
}
