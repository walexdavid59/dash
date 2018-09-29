<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empid');
            $table->string('emptype');
            $table->integer('house');
            $table->integer('medical');
            $table->integer('special');
            $table->integer('providentallow');
            $table->integer('otherallow');
            $table->integer('tax');
            $table->integer('providentdeduct');
            $table->integer('otherdeduct');
            $table->integer('gross');
            $table->integer('net');
            $table->integer('total');
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
        Schema::dropIfExists('salarys');
    }
}
