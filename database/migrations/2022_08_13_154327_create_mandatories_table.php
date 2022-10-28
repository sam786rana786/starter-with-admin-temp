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
        Schema::create('mandatories', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_school')->nullable();
            $table->string('aff_no')->nullable();
            $table->string('school_code')->nullable();
            $table->string('add_pin')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('school_email')->nullable();
            $table->string('contact')->nullable();
            $table->string('aff_doc')->nullable();
            $table->string('society_doc')->nullable();
            $table->string('noc_gov')->nullable();
            $table->string('recognition_doc')->nullable();
            $table->string('building_noc')->nullable();
            $table->string('fire_noc')->nullable();
            $table->string('self_doc')->nullable();
            $table->string('iph_noc')->nullable();
            $table->string('fee_structure')->nullable();
            $table->string('academic_cal')->nullable();
            $table->string('smc')->nullable();
            $table->string('pta')->nullable();
            $table->string('three_year_result')->nullable();
            $table->string('x_year1')->nullable();
            $table->string('x_year2')->nullable();
            $table->string('x_year3')->nullable();
            $table->string('x_students1')->nullable();
            $table->string('x_students2')->nullable();
            $table->string('x_students3')->nullable();
            $table->string('x_pass1')->nullable();
            $table->string('x_pass2')->nullable();
            $table->string('x_pass3')->nullable();
            $table->string('x_percentage1')->nullable();
            $table->string('x_percentage2')->nullable();
            $table->string('x_percentage3')->nullable();
            $table->string('x_remarks1')->nullable();
            $table->string('x_remarks2')->nullable();
            $table->string('x_remarks3')->nullable();
            $table->string('principal_no')->nullable();
            $table->string('prt_no')->nullable();
            $table->string('tgt')->nullable();
            $table->string('prt')->nullable();
            $table->string('ratio')->nullable();
            $table->string('special_educator')->nullable();
            $table->string('counsellor')->nullable();
            $table->string('campus_area')->nullable();
            $table->string('class_room')->nullable();
            $table->string('lab')->nullable();
            $table->string('internet')->nullable();
            $table->string('girl_toilet')->nullable();
            $table->string('boy_toilet')->nullable();
            $table->string('youtube_link')->nullable();
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
        Schema::dropIfExists('mandatories');
    }
};
