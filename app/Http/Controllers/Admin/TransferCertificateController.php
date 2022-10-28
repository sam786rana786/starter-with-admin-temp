<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(TransferCertificate $transferCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(TransferCertificate $transferCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransferCertificate $transferCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransferCertificate  $transferCertificate
     * @return \Illuminate\Http\Response
     */
    public function delete(TransferCertificate $transferCertificate)
    {
        //
    }
}
