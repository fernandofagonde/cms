<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page__sections', function (Blueprint $table) {
            $table->id();    
            $table->integer('page_id');
            $table->integer('section_id'); 
            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->boolean('enabled');
            $table->softDeletes();
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
        Schema::dropIfExists('page__sections');
    }
};
