<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_slider', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('short_title');
            $table->text('description');
            $table->string('background_color');
            $table->string('slider_img');
            $table->string('slider_alt');
            $table->string('button');
            $table->string('button_link');
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
