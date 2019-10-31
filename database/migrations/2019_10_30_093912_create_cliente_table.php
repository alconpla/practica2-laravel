<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->string('apellidos', 100);
            $table->dateTime('fecha_de_nacimiento');
            $table->string('correo', 50)->unique();
            $table->ipAddress('ip')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('direccion', 50)->nullable();
            $table->string('estado_civil', 50)->nullable();
            $table->integer('sueldo_anual')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->unique(['nombre', 'apellidos', 'fecha_de_nacimiento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
