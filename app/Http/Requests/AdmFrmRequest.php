<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmFrmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'student_class' => 'required',
            'stu_fname' => 'required',
            'stu_midname' => 'required',
            'stu_lastname' => 'required',
            'gender' => 'required',
            'stu_dob' => 'required|date',
            'religion' => 'required',
            'category' => 'required',
            'nation' => 'required',
            'stu_mobno' => 'required',
            'lrn_disbl' => 'required',
            'hlth_cncrn' => 'required',
            'stu_mailid' => 'required|email',
            'prefer' => 'required',
            'comn_mobno' => 'required',
            'comn_mailid' => 'required|email',
            'res_address' => 'required',
            'res_post' => 'required',
            'res_dist' => 'required',
            'res_state' => 'required',
            'res_pin' => 'required|numeric',
            'f_name' => 'required',
            'f_mobile' => 'required',
            'f_mailid' => 'required|email',
            'f_mnite' => 'required',
            'f_qual' => 'required',
            'f_occup' => 'required',
            'f_desig' => 'required',
            'm_name' => 'required',
            'm_mobile' => 'required',
            'm_mailid' => 'required|email',
            'm_mnite' => 'required',
            'm_qual' => 'required',
            'm_occup' => 'required',
            'm_desig' => 'required',
            'cur_schname' => 'required',
            'cur_schcode' => 'required|numeric',
            'cur_brdroll' => 'required|numeric',
            'cur_brdname' => 'required',
            'cur_brdpassyr' => 'required|numeric',
            'cur_medinst' => 'required',
            'cur_brdtype' => 'required',
            'ack' => 'required',
        ];
    }
}
