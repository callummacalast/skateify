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
        Schema::create('skate_spots_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skatespot_id');
            $table->foreign('skatespot_id')->references('id')->on('skate_spots');
            $table->string('type');
            $table->string('path');
            $table->string('filename');
            $table->string('extension');
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
        Schema::dropIfExists('skate_spots_media');
    }
};
