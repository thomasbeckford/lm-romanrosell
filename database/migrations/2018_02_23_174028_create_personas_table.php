<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
             $table->increments('id');          
             $table->date('fecha_de_ingreso');  // FECHA
             $table->integer('legajo');
             $table->string('nombre');
             $table->bigInteger('dni');
             $table->date('fnac');              // FECHA
             $table->string('domicilio');      
             $table->bigInteger('telefono');
             $table->string('certificado');
             $table->date('vcud');              // FECHA
             $table->string('obrasoc');
             $table->string('situacion');
             $table->string('pdt');
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
        Schema::dropIfExists('personas');
    }
}