<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('categorias', function (Blueprint $table) {
            $table->increments('idc');
			$table->string('categoria',40);
			$table->string('descripcion',200);
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
        Schema::drop('categorias');
    }
}
