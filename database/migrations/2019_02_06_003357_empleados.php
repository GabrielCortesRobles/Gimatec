<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('ide');
			$table->string('nombre_emple',40);
			$table->string('apat_emple',40);
			$table->string('amat_emple',40);
			$table->string('curp',20);
			$table->date('fecha_emple');
			$table->string('sexo_emple',10);
			$table->integer('tipo');
			$table->Integer('idmun')->unsigned();
			$table->string('cp',10);
			$table->string('localidad_emple',40);
			$table->string('calle_emple',40);
			$table->string('num_int_emple',10);
			$table->string('num_ext_emple',10);
            $table->string('tele_emple',40);
            $table->string('correo_emple',50);
            $table->string('archivo',200);
			$table->foreign('idmun')->references('idmun')->on('municipios');
			
			$table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
			 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
