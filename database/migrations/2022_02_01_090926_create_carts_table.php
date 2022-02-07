<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('images_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('comentario', 250)->nullable(); // espaço reservado para usuario comentar sobre seu pedido
            $table->double('valor', 8, 2)->default('0.00'); // valor total do pedido será calculado pelo valor da image x quantidade
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
        Schema::dropIfExists('carts');
    }
}
