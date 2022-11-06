<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\TransferCertificate;
use App\Http\Controllers\Controller;

class TransferCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = TransferCertificate::all();
        return view('admin.tc.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class' => 'required',
            'section' => 'required',
            'admission_no' => 'required',
            'pdf' => 'required'
        ]);

        if ($request->file('pdf'))
        {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/tc'), $filename);
            $imageName = 'backend/uploads/tc/' . $filename;
            $validatedData['pdf'] = $imageName;
        }
        TransferCertificate::create($validatedData);
        return redirect()->route('tc.index')->with('success', 'Transfer Certificate submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transferCertificate = TransferCertificate::findOrFail($id);
        return view('admin.tc.show', compact('transferCertificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transferCertificate = TransferCertificate::findOrFail($id);
        return view('admin.tc.edit', compact('transferCertificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transferCertificate = TransferCertificate::findOrFail($id);
        $request->validate([
            'class' => 'required',
            'section' => 'required',
            'admission_no' => 'required'
        ]);

        if ($request->file('pdf'))
        {

            $file = $request->file('pdf');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/tc'), $filename);
            $imageName = 'backend/uploads/tc/' . $filename;
            if(file_exists(public_path($transferCertificate->pdf)) )
            {
                unlink($transferCertificate->pdf);
            }
            $transferCertificate->pdf = $imageName;
        }

        if($request->admission_no)
        {
            $transferCertificate->class = $request->class;
            $transferCertificate->section = $request->section;
            $transferCertificate->admission_no = $request->admission_no;
        }
        $transferCertificate->save();
        return redirect()->route('tc.index')->with('success', 'Transfer Certificate Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transferCertificate = TransferCertificate::findOrFail($id);
        if(file_exists(public_path($transferCertificate->pdf)) )
        {
            unlink($transferCertificate->pdf);
        }
        $transferCertificate->delete();
        return redirect()->route('tc.index')->with('success', 'Transfer Certificate deleted successfully.');
    }
}
