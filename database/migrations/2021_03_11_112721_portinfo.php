<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portinfo', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('sub_title');
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
