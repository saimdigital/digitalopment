<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_video', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('short_title');
            $table->string('background_img');
            $table->string('background_img_alt');
            $table->string('popup_video');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_tags');
            $table->string('meta_keywords');
            $table->string('status');
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
        //
    }
}
