<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('article_photo'))){
            Schema::create('article_photo', function(Blueprint $table){
                $table->integer('article_id')->unsigned();
                $table->foreign('article_id')->references('id')->on('articles');
                $table->integer('photo_id')->unsigned();
                $table->foreign('photo_id')->references('id')->on('photos');
                $table->timestamps();
            });
        }
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
