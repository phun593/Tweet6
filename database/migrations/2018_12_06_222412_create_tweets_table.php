<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->text('tweet')->nullable();
            $table->string('tweet_avatar')->nullable();
            $table->string('image')->nullable();
            
            // $table->integer('user_id')->default(NULL);
            // $table->text('messages')->default(NULL);
            // $table->string('picture')->default(NULL);
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
        Schema::dropIfExists('tweets');
    }
}
