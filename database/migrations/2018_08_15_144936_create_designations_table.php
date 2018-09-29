<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->string('department');
            $table->string('description','250');
            $table->string('username')->default('');
            $table->string('added_on')->default('');
            $table->string('status')->default('0');
            $table->string('action')->default('');
            $table->timestamps();
            //$table->renameColumn('user', 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designations');
        //Schema::dropColumn('UserDomainName');

    }

}
