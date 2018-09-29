<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldatas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->dateTime('time');
            $table->string('empid');
            $table->string('surname');
            $table->string('othername');
            $table->date('dob');
            $table->string('sex');
            $table->string('state');
            $table->string('localgovt');
            $table->string('marital');
            $table->string('religion');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
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
        Schema::dropIfExists('personaldatas');

    }
}
