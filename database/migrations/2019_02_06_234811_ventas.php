<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('idv');
			$table->Integer('ide')->unsigned();
			$table->Integer('idp')->unsigned();
			$table->date('fecha_ven');
			$table->double('total_pro');
			$table->foreign('ide')->references('ide')->on('empleados');
			$table->foreign('idp')->references('idp')->on('prospectos');
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
        Schema::drop('ventas');
    }
}
