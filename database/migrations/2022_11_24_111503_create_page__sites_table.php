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
        Schema::create('page__sites', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->integer('page_id');
            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('page_id')->references('id')->on('pages');
            $table->boolean('enabled');
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
        Schema::dropIfExists('page__sites');
    }
};
