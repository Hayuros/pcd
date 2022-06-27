<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->integer('qtdEstrelas');
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('estabelecimento_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('acessibilidade_id')->constrained();
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
        Schema::dropIfExists('postagens');
    }
}
