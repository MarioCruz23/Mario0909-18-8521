<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomonedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criptomonedas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('logotipo');
            $table->string('nombre');
            $table->string('precio');
            $table->string('descripcion_');
            $table->bigInteger('lenguaje_id')->unsigned();
            $table->timestamps();
            $table->foreign('lenguaje_id')->references('id')->on('lenguajeprogramacions')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criptomonedas');
    }
}
