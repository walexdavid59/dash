<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkexpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workexp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empid');
            $table->string('surname');
            $table->string('othername');
            $table->string('organisation');
            $table->string('designation');
            $table->string('description');
            $table->date('startdate');
            $table->date('enddate');
            $table->date('date');
            $table->dateTime('time');
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
        Schema::dropIfExists('workexp');
    }
}
