<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName')->unique();
            $table->string('pass', 8);
            $table->string('DOB');
            $table->string('jK');
            $table->string('noTelp');
            $table->string('email')->unique();
            $table->string('role');
 
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
        Schema::dropIfExists('user_models');
    }
}
