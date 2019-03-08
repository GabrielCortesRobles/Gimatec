<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipoprospectos extends Migration
{
    public function up()
    {
        Schema::create('tipoprospectos', function (Blueprint $table) {
            $table->increments('idstatus');
			$table->string('statuss',40);
			$table->string('descripcion',200);
			$table->rememberToken();
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tipoprospectos');
    }
}
