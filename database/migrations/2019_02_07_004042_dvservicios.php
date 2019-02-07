<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dvservicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvservicios', function (Blueprint $table) {
            $table->increments('iddvs');
			$table->Integer('idv')->unsigned();
			$table->Integer('ids')->unsigned();
			$table->double('precio_dvs');
			$table->double('cantidad_dvs');
			$table->double('sutotal_dvs');
			$table->foreign('idv')->references('idv')->on('ventas');
			$table->foreign('ids')->references('ids')->on('servicios');
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
        Schema::drop('dvservicios');
    }
}
