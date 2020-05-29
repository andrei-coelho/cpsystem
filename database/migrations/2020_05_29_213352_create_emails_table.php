<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('id_email_banch')->nullable();
            $table->unsignedBigInteger('id_lista_contatos');
            $table->foreign('id_lista_contatos')->references('id')->on('lista_contatos');
            $table->string('nome')->nullable();
            $table->string('assunto');
            $table->string('nome_campanha')->nullable();
            $table->integer('tipo');
            $table->unsignedBigInteger('id_content_template');
            $table->foreign('id_content_template')->references('id')->on('content_template');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
