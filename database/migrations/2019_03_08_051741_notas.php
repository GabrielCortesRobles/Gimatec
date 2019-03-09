<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notas extends Migration
{
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id_notas');
			$table->integer('idp')->unsigned();
			$table->Integer('ide')->unsigned();
			$table->string('nota',250);
			$table->foreign('idp')->references('idp')->on('prospectos');
			$table->foreign('ide')->references('ide')->on('empleados');
			$table->rememberToken();
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('notas');
    }
}
