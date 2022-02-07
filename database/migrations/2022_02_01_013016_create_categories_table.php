<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('album_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('categorias'); // casamento, festa, etc // assim eu predefino o nome da categoria
            $table->boolean('private')->default('1')->nullable(); // true se for a capa do album
            $table->json('formatos')->nullable(); // formato da imagem (horizontal, vertical, quadrada)
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
        Schema::dropIfExists('categories');
    }
}
