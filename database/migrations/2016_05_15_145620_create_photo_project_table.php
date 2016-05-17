<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('photo_project'))){
            Schema::create('photo_project', function(Blueprint $table){
                $table->integer('photo_id')->unsigned();
                $table->foreign('photo_id')->references('id')->on('photos');
                $table->integer('project_id')->unsigned();
                $table->foreign('project_id')->references('id')->on('projects');
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
