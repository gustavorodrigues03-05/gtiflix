<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('lancamento')->nullable();
            $table->integer('classificacao')->nullable();
            $table->integer('duracao')->nullable();
            $table->text('descricao')->nullable();
            $table->string('poster')->nullable();
            $table->string('capa')->nullable();
            $table->foreignId('diretor_id')->nullable()->constrained('diretores','id');
            $table->foreignId('produtora_id')->nullable()->constrained();
            $table->foreignId('nacionalidade_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
