<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Annonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('path');
            $table->integer('nbpiece');
            $table->integer('price');
            $table->integer('idCustomer');
            $table->integer('idTypeOfAnnonce');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
