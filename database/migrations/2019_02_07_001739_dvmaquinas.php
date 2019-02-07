<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dvmaquinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvmaquinas', function (Blueprint $table) {
            $table->increments('iddvm');
			$table->Integer('idv')->unsigned();
			$table->Integer('idm')->unsigned();
			$table->double('precio_dvm');
			$table->double('cantidad_dvm');
			$table->double('sutotal_dvm');
			$table->foreign('idv')->references('idv')->on('ventas');
			$table->foreign('idm')->references('idm')->on('maquinas');
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
        Schema::drop('dvmaquinas');
    }
}
