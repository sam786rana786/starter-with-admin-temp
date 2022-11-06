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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('class');
            $table->string('section');
            $table->string('year_passing');
            $table->string('gender');
            $table->string('status');
            $table->string('landline');
            $table->string('mobile');
            $table->string('organization');
            $table->longText('location');
            $table->string('qualification');
            $table->string('specialization');
            $table->longText('institute');
            $table->string('photo');
            $table->boolean('is_approved')->default(0)->nullable();
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
        Schema::dropIfExists('alumnis');
    }
};
