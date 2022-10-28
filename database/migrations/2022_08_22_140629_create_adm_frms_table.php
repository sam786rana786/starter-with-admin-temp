<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\False_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_frms', function (Blueprint $table) {
            $table->id();
            $table->string('student_class');
            $table->string('stream')->nullable();
            $table->string('stu_fname');
            $table->string('stu_midname')->nullable();
            $table->string('stu_lastname')->nullable();
            $table->string('gender')->nullable();
            $table->string('stu_dob');
            $table->string('religion')->nullable();
            $table->string('category')->nullable();
            $table->string('nation')->nullable();
            $table->string('stu_mobno')->nullable();
            $table->string('lrn_disbl')->nullable();
            $table->string('hlth_cncrn')->nullable();
            $table->string('stu_mailid')->nullable();
            $table->string('prefer')->nullable();
            $table->string('stu_photo')->nullable();
            $table->string('comn_mobno')->nullable();
            $table->string('comn_mailid')->nullable();
            $table->text('res_address')->nullable();
            $table->string('res_post')->nullable();
            $table->string('res_dist')->nullable();
            $table->string('res_state')->nullable();
            $table->string('res_pin')->nullable();
            $table->string('f_name')->nullable();
            $table->string('f_mobile')->nullable();
            $table->string('f_mailid')->nullable();
            $table->string('f_mnite')->nullable();
            $table->string('f_qual')->nullable();
            $table->string('f_occup')->nullable();
            $table->string('f_desig')->nullable();
            $table->string('m_name')->nullable();
            $table->string('m_mobile')->nullable();
            $table->string('m_mailid')->nullable();
            $table->string('m_mnite')->nullable();
            $table->string('m_qual')->nullable();
            $table->string('m_occup')->nullable();
            $table->string('m_desig')->nullable();
            $table->string('cur_schname')->nullable();
            $table->string('cur_schcode')->nullable();
            $table->string('cur_brdroll')->nullable();
            $table->string('cur_brdname')->nullable();
            $table->string('cur_brdpassyr')->nullable();
            $table->string('cur_medinst')->nullable();
            $table->string('cur_brdtype')->nullable();
            $table->string('docum')->nullable();
            $table->string('ack')->nullable();
            $table->boolean('is_approved')->nullable();
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
        Schema::dropIfExists('adm_frms');
    }
};
