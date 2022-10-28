<?php

namespace App\Http\Controllers\Admin;

use App\Models\Uniform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdmissionFee;
use App\Models\AgeCriteria;
use App\Models\Dress;
use App\Models\FeeChart;

class UniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $uni = Uniform::findOrFail($id);
        $dresses = Dress::all();
        $age_criterias = AgeCriteria::all();
        $fee_charts = FeeChart::all();
        $admission_fees = AdmissionFee::all();
        return view('admin.uniform.index', compact('uni', 'dresses', 'age_criterias', 'fee_charts', 'admission_fees'));
    }

    public function createDress()
    {
        return view('admin.uniform.Dress.create');
    }

    public function storeDress(Request $request)
    {
        $validatedData = $request->validate([
            'days' => 'required',
            'nur' => 'required',
            'second' => 'required',
            'ninth' => 'required',
        ]);
        Dress::create($validatedData);

        return redirect()->back()->with('success', 'Dress Data Stored Successfully!');

    }

    public function createAgeCriteria()
    {
        return view('admin.uniform.AgeCriteria.create');
    }

    public function storeAgeCriteria(Request $request)
    {
        $validatedData = $request->validate([
            'age_criteria' => 'required',
            'age' => 'required'
        ]);

        AgeCriteria::create($validatedData);
        $message = ['success', 'Age Criteria Data stored Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function createFeeChart()
    {
        return view('admin.uniform.FeeChart.create');
    }

    public function storeFeeChart(Request $request)
    {
        $validatedData = $request->validate([
            'fee_breakup' => 'required',
            'type' => 'required',
            'applicable' => 'required',
            'payment_pattern' => 'required',
            'amount' => 'required'
        ]);

        FeeChart::create($validatedData);
        $message = ['success', 'Fee Chart Data stored Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function createAdmissionFees()
    {
        return view('admin.uniform.AdmissionFee.create');
    }

    public function storeAdmissionFees(Request $request)
    {
        $validatedData = $request->validate([
            'classes' => 'required',
            'amount' => 'required'
        ]);

        AdmissionFee::create($validatedData);
        $message = ['success', 'Admission Fee Data stored Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function edit(Uniform $uniform)
    {
        return view('admin.uniform.edit', compact('uniform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function dressEdit(Dress $dress)
    {
        return view('admin.uniform.Dress.edit', compact('dress'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgeCriteria  $ageCriteria
     * @return \Illuminate\Http\Response
     */
    public function ageCriteriaEdit(AgeCriteria $ageCriteria)
    {
        return view('admin.uniform.AgeCriteria.edit', compact('ageCriteria'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeeChart  $feeChart
     * @return \Illuminate\Http\Response
     */
    public function feeChartEdit(FeeChart $feeChart)
    {
        return view('admin.uniform.FeeChart.edit', compact('feeChart'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmissionFee  $admissionFee
     * @return \Illuminate\Http\Response
     */
    public function admissionFeesEdit(AdmissionFee $admissionFee)
    {
        return view('admin.uniform.AdmissionFee.edit', compact('admissionFee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uniform $uniform)
    {
        $request->validate([
            'admission' => 'required',
            'fee_submission' => 'required',
            'important_notice' => 'required',
            'note' => 'required',
            'year' => 'required',
        ]);
        $uniform->admission = $request->admission;
        $uniform->fee_submission = $request->fee_submission;
        $uniform->important_notice = $request->important_notice;
        $uniform->note = $request->note;
        $uniform->year = $request->year;
        $uniform->save();
        return redirect()->route('uniform.index')->with('success', 'All Data updated successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function dressUpdate(Request $request, Dress $dress)
    {
        $request->validate([
            'days' => 'required',
            'nur' => 'required',
            'second' => 'required',
            'ninth' => 'required',
        ]);

        $dress->days = $request->days;
        $dress->nur = $request->nur;
        $dress->second = $request->second;
        $dress->ninth = $request->ninth;
        $dress->save();
        return redirect()->route('uniform.index')->with('success', 'Dress Data Updated Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function ageCriteriaUpdate(Request $request, AgeCriteria $ageCriteria)
    {
        $request->validate([
            'age_criteria' => 'required',
            'age' => 'required'
        ]);

        $ageCriteria->age_criteria = $request->age_criteria;
        $ageCriteria->age = $request->age;
        $ageCriteria->save();
        $message = ['success', 'Age Criteria Updated Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function feeChartUpdate(Request $request, FeeChart $feeChart)
    {
        $request->validate([
            'fee_breakup' => 'required',
            'type' => 'required',
            'applicable' => 'required',
            'payment_pattern' => 'required',
            'amount' => 'required'
        ]);

        $feeChart->fee_breakup = $request->fee_breakup;
        $feeChart->type = $request->type;
        $feeChart->applicable = $request->applicable;
        $feeChart->payment_pattern = $request->payment_pattern;
        $feeChart->amount = $request->amount;
        $feeChart->save();
        $message = ['success', 'Fee Chart Updated Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function admissionFeesUpdate(Request $request, AdmissionFee $admissionFee)
    {
        $request->validate([
            'classes' => 'required',
            'amount' => 'required'
        ]);

        $admissionFee->classes = $request->classes;
        $admissionFee->amount = $request->amount;
        $admissionFee->save();
        $message = ['success', 'Admission Fee Data Updated Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function deleteDress(Dress $dress)
    {
        $dress->delete();
        $message = ['info', 'Dress Data deleted Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function deleteAgeCriteria(AgeCriteria $ageCriteria)
    {
        $ageCriteria->delete();
        $message = ['info', 'Age Criteria Deleted Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function deleteFeeChart(FeeChart $feeChart)
    {
        $feeChart->delete();
        $message = ['info', 'Fee Chart deleted Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }

    public function deleteAdmissionFees(AdmissionFee $admissionFee)
    {
        $admissionFee->delete();
        $message = ['info', 'Admission Fee deleted Successfully'];
        return redirect()->route('uniform.index')->with($message);
    }
}
