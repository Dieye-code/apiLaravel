<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('montant')->unsigned();
            $table->string('dateOperation');
            $table->integer('compteId')->unsigned();
            $table->integer('typeOperation_id')->unsigned();
            $table->timestamps();
            $table->foreign('compteId')->references('id')->on('comptes');
            $table->foreign('typeOperation_id')->references('id')->on('type_operations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('operations');
    }
}
