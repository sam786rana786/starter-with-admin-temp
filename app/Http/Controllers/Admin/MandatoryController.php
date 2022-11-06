<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Mandatory;
use App\Http\Controllers\Controller;

class MandatoryController extends Controller
{
    public $currentStep = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $mandatory = Mandatory::findOrFail($id);
        return view('admin.mandatory.index', compact('mandatory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Mandatory  $mandatory
     * @return \Illuminate\Http\Response
     */
    public function edit(Mandatory $mandatory)
    {
        return view('admin.mandatory.edit', compact('mandatory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Mandatory  $mandatory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mandatory $mandatory)
    {
        $request->validate([
            'name_of_school' => 'required',
            'aff_no' => 'required',
            'school_code' => 'required',
            'add_pin' => 'required',
            'principal_name' => 'required',
            'school_email' => 'required',
            'contact' => 'required',
            'aff_doc' => 'required',
            'society_doc' => 'required',
            'noc_gov' => 'required',
            'recognition_doc' => 'required',
            'building_noc' => 'required',
            'fire_noc' => 'required',
            'self_doc' => 'required',
            'iph_noc' => 'required',
            'fee_structure' => 'required',
            'academic_cal' => 'required',
            'smc' => 'required',
            'pta' => 'required',
            'three_year_result' => 'required',
            'x_year1' => 'required',
            'x_year2' => 'required',
            'x_year3' => 'required',
            'x_students1' => 'required',
            'x_students2' => 'required',
            'x_students3' => 'required',
            'x_pass1' => 'required',
            'x_pass2' => 'required',
            'x_pass3' => 'required',
            'x_percentage1' => 'required',
            'x_percentage2' => 'required',
            'x_percentage3' => 'required',
            'x_remarks1' => 'required',
            'x_remarks2' => 'required',
            'x_remarks3' => 'required',
            'principal_no' => 'required',
            'prt_no' => 'required',
            'tgt' => 'required',
            'prt' => 'required',
            'ratio' => 'required',
            'special_educator' => 'required',
            'counsellor' => 'required',
            'campus_area' => 'required',
            'class_room' => 'required',
            'lab' => 'required',
            'internet' => 'required',
            'girl_toilet' => 'required',
            'boy_toilet' => 'required',
            'youtube_link' => 'required',
        ]);

        if($request->file('aff_doc'))
        {
            $aff_doc1 = $request->file('aff_doc');
            $aff_doc = $aff_doc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->aff_doc)) ){unlink($mandatory->aff_doc);};
            $mandatory->aff_doc = $aff_doc;
        }
        if ($request->file('society_doc')) {
            $society_doc1 = $request->file('society_doc');
            $society_doc = $society_doc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->society_doc)) ){unlink($mandatory->society_doc);};
            $mandatory->society_doc = $society_doc;
        }
        if ($request->file('noc_gov')) {
            $noc_gov1 = $request->file('noc_gov');
            $noc_gov = $noc_gov1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->noc_gov)) ){unlink($mandatory->noc_gov);};
            $mandatory->noc_gov = $noc_gov;
        }
        if ($request->file('recognition_doc')) {
            $recognition_doc1 = $request->file('recognition_doc');
            $recognition_doc = $recognition_doc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->recognition_doc)) ){unlink($mandatory->recognition_doc);};
            $mandatory->recognition_doc = $recognition_doc;

        }
        if ($request->file('building_noc')) {
            $building_noc1 = $request->file('building_noc');
            $building_noc = $building_noc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->building_noc)) ){unlink($mandatory->building_noc);};
            $mandatory->building_noc = $building_noc;

        }
        if ($request->file('fire_noc')) {
            $fire_noc1 = $request->file('fire_noc');
            $fire_noc = $fire_noc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->fire_noc)) ){unlink($mandatory->fire_noc);};
            $mandatory->fire_noc = $fire_noc;

        }
        if ($request->file('self_doc')) {
            $self_doc1 = $request->file('self_doc');
            $self_doc = $self_doc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->self_doc)) ){unlink($mandatory->self_doc);};
            $mandatory->self_doc = $self_doc;

        }
        if ($request->file('iph_noc')) {
            $iph_noc1 = $request->file('iph_noc');
            $iph_noc = $iph_noc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->iph_noc)) ){unlink($mandatory->iph_noc);};
            $mandatory->iph_noc = $iph_noc;

        }
        if ($request->file('fee_structure')) {
            $fee_structure1 = $request->file('fee_structure');
            $fee_structure = $fee_structure1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->fee_structure)) ){unlink($mandatory->fee_structure);};
            $mandatory->fee_structure = $fee_structure;

        }
        if ($request->file('academic_cal')) {
            $academic_cal1 = $request->file('academic_cal');
            $academic_cal = $academic_cal1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->academic_cal)) ){unlink($mandatory->academic_cal);};
            $mandatory->academic_cal = $academic_cal;

        }
        if ($request->file('smc')) {
            $smc1 = $request->file('smc');
            $smc = $smc1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->smc)) ){unlink($mandatory->smc);};
            $mandatory->smc = $smc;

        }
        if ($request->file('pta')) {
            $pta1 = $request->file('pta');
            $pta = $pta1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->pta)) ){unlink($mandatory->pta);};
            $mandatory->pta = $pta;

        }
        if ($request->file('three_year_result')) {
            $three_year_result1 = $request->file('three_year_result');
            $three_year_result = $three_year_result1->store('/backend/uploads/mandatory',  ['disk' => 'public_uploads']);
            if(file_exists(public_path($mandatory->three_year_result)) ){unlink($mandatory->three_year_result);};
            $mandatory->three_year_result = $three_year_result;
        }

            $mandatory->name_of_school = $request->name_of_school;
            $mandatory->aff_no = $request->aff_no;
            $mandatory->school_code = $request->school_code;
            $mandatory->add_pin = $request->add_pin;
            $mandatory->principal_name = $request->principal_name;
            $mandatory->school_email = $request->school_email;
            $mandatory->contact = $request->contact;
            $mandatory->x_year1 = $request->x_year1;
            $mandatory->x_year2 = $request->x_year2;
            $mandatory->x_year3 = $request->x_year3;
            $mandatory->x_students1 = $request->x_students1;
            $mandatory->x_students2 = $request->x_students2;
            $mandatory->x_students3 = $request->x_students3;
            $mandatory->x_pass1 = $request->x_pass1;
            $mandatory->x_pass2 = $request->x_pass2;
            $mandatory->x_pass3 = $request->x_pass3;
            $mandatory->x_percentage1 = $request->x_percentage1;
            $mandatory->x_percentage2 = $request->x_percentage2;
            $mandatory->x_percentage3 = $request->x_percentage3;
            $mandatory->x_remarks1 = $request->x_remarks1;
            $mandatory->x_remarks2 = $request->x_remarks2;
            $mandatory->x_remarks3 = $request->x_remarks3;
            $mandatory->principal_no = $request->principal_no;
            $mandatory->prt_no = $request->prt_no;
            $mandatory->tgt = $request->tgt;
            $mandatory->prt = $request->prt;
            $mandatory->ratio = $request->ratio;
            $mandatory->special_educator = $request->special_educator;
            $mandatory->counsellor = $request->counsellor;
            $mandatory->campus_area = $request->campus_area;
            $mandatory->class_room = $request->class_room;
            $mandatory->lab = $request->lab;
            $mandatory->internet = $request->internet;
            $mandatory->girl_toilet = $request->girl_toilet;
            $mandatory->boy_toilet = $request->boy_toilet;
            $mandatory->youtube_link = $request->youtube_link;
            $mandatory->save();
            $message = ['success', 'All Details updated successfully.'];
            return redirect()->route('mandatory.index')->with($message);
    }
}
