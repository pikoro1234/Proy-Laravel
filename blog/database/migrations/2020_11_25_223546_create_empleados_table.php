<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('inputNombre');
            $table->string('inputEmail');
            $table->string('inputPassword');
            $table->string('inputDireccion');
            $table->string('inputDepartamentoEmple');
            $table->string('inputCiudadEmple');
            $table->string('inputZip');
            $table->string('notificame');
            $table->foreignId('id_departamento')->constrained('departamentos');
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
        Schema::dropIfExists('empleados');
    }
}
