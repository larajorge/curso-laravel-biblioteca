<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            //$table->id();
            //$table->unsignedInteger('rol_id');

            $table->foreignId('rol_id')->constrained('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('restrict')->onUpdate('restrict');
            //$table->foreign('rol_id', 'fk_usuariorol_rol')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            //$table->unsignedInteger('usuario_id');
           // $table->foreign('usuario_id', 'fk_usuariorol_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
