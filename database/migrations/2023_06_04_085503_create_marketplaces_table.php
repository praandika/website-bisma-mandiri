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
        Schema::create('marketplaces', function (Blueprint $table) {
            $table->id();
            $table->string('marketplace')->nullable();
            $table->string('marketplace_abbr');
            $table->string('link');
            $table->string('image');
            $table->string('image_mobile');
            $table->enum('show_title',['show','hide']);
            $table->enum('show_title_mobile',['show','hide']);
            $table->enum('status',['show','hide']);
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
        Schema::dropIfExists('marketplaces');
    }
};
