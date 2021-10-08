<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->float('comprimento', 8,2);
            $table->timestamps();


            // chave estrangeira de produtos
            $table->unsignedBigInteger('produto_id');
            // constraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            // sem o unique um produto_detalhes teriam varios produto_detalhes
            // no relacionamento de um para muitos não utiliza o unique
            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
