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
        Schema::create('important_images', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->nullable(); //image of the head
            $table->string('mandatory_image')->nullable();
            $table->string('facilities_image')->nullable();
            $table->string('admission_image')->nullable();
            $table->string('achievements_image')->nullable();
            $table->string('infoLink_image')->nullable();
            $table->string('gallery_image')->nullable();
            $table->string('tc_image')->nullable();
            $table->string('alumni_image')->nullable();
            $table->string('contact_image')->nullable();
            $table->string('style')->default('style1');
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
        Schema::dropIfExists('important_images');
    }
};
