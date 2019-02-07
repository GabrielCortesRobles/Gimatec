<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instalaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalaciones', function (Blueprint $table) {
            $table->increments('idi');
			$table->Integer('iddvm')->unsigned();
			$table->date('fecha_inst');
			$table->time('horainicio');
			$table->date('horafinal');
			$table->foreign('iddvm')->references('iddvm')->on('dvmaquinas');
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
        Schema::drop('instalaciones');
    }
}
