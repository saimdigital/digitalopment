<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomePortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_portfolio', function (Blueprint $table){
            $table->id();
            $table->string('language_title');
            $table->string('Logo');
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
