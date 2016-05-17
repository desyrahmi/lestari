<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('event_photo'))){
            Schema::create('event_photo', function(Blueprint $table){
                $table->integer('event_id')->unsigned();
                $table->foreign('event_id')->references('id')->on('events');
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
