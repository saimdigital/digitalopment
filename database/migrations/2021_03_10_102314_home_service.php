<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_service', function (Blueprint $table){
            $table->id();
            $table->string('service_title');
            $table->string('service_word');
            $table->string('service_img');
            $table->string('service_img_alt');
            $table->string('service_text');
            $table->string('service_link');
            $table->text('service_description');
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
