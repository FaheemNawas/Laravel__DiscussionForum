<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_models', function (Blueprint $table) {
            $table->increments('id'); // id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
            $table->string('title'); // title VARCHAR(255) NOT NULL
            $table->text('post'); // posts TEXT NOT NULL
            $table->rememberToken();
            $table->timestamps(); // created_at DEFAULT, update_at DEFAULT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_models');
    }
}
