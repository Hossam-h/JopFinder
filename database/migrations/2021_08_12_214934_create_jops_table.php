<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jops', function (Blueprint $table) {
            $table->id();
            $table->string('jop_name');
            $table->string('company_name');
            $table->string('location');
            $table->integer('salary');
            $table->text('jop_description');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
           
            //$table->integer('u_info_id')->unsigned()->index(); 

            $table->foreign('category_id')->references('id')->on('categores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jops');
    }
}
