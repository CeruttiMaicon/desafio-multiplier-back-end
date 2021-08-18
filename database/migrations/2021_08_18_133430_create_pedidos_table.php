<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mesas_id')->references('id')->on('mesas')->onDelete('cascade');
            $table->foreignId('cardapio_id')->references('id')->on('cardapio')->onDelete('cascade');
            $table->foreignId('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreignId('progress_id')->references('id')->on('progress')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign(['mesas_id']);
            $table->dropForeign(['cardapio_id']);
            $table->dropForeign(['clientes_id']);
            $table->dropForeign(['progress_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('pedidos');
    }
}
