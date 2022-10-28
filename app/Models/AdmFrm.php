<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmFrm extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_class',
        'stu_fname',
        'stu_midname',
        'stu_lastname',
        'gender',
        'stu_dob',
        'religion',
        'category',
        'nation',
        'stu_mobno',
        'lrn_disbl',
        'hlth_cncrn',
        'stu_mailid',
        'prefer',
        'comn_mobno',
        'comn_mailid',
        'res_address',
        'res_post',
        'res_dist',
        'res_state',
        'res_pin',
        'f_name',
        'f_mobile',
        'f_mailid',
        'f_mnite',
        'f_qual',
        'f_occup',
        'f_desig',
        'm_name',
        'm_mobile',
        'm_mailid',
        'm_mnite',
        'm_qual',
        'm_occup',
        'm_desig',
        'cur_schname',
        'cur_schcode',
        'cur_brdroll',
        'cur_brdname',
        'cur_brdpassyr',
        'cur_medinst',
        'cur_brdtype',
        'ack',
        'stu_photo',
    ];
}
