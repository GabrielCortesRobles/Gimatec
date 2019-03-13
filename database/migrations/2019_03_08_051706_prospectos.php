<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prospectos extends Migration
{
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->increments('idp');
			$table->Integer('ide')->unsigned();
			$table->Integer('idstatus')->unsigned();
			$table->string('nombre_pro',40);
			$table->string('apat_pro',40);
			$table->string('amat_pro',40);
			$table->string('curp_pro',40);
			$table->date('fecha_pro');
			$table->string('sexo_pro',40);
			$table->string('correo_pro',40);
			$table->string('empresa',40);
			$table->Integer('idmun')->unsigned();
			$table->string('cp_pro',10);
			$table->string('localidad_pro',40);
			$table->string('calle_pro',50);
			$table->Integer('num_int_pro');
			$table->Integer('num_ext_pro');
			$table->string('tele_pro',40);
			$table->foreign('ide')->references('ide')->on('empleados');
			$table->foreign('idstatus')->references('idstatus')->on('tipoprospectos');
			$table->foreign('idmun')->references('idmun')->on('municipios');
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
			 });
		
    }

    public function down()
    {
        Schema::drop('prospectos');
    }
}
