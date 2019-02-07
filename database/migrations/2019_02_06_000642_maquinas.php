<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maquinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->increments('idm');
			$table->string('nombre_maq',40);
			$table->string('descripcion_maq',40);
			$table->integer('existencia');
			$table->double('precio');
			$table->string('archivo',40);
			$table->unsignedInteger('idc');
			$table->foreign('idc')->references('idc')->on('categorias');
			
			
			$table->rememberToken();
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
         Schema::drop('maquinas');
    }
}
