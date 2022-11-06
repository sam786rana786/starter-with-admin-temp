<?php

namespace App\Http\Controllers;

use App\Models\RulesRegulation;
use Illuminate\Http\Request;

class RulesRegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rule = RulesRegulation::findOrFail(1);
        return view('admin.rulesandregulations.index', compact('rule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RulesRegulation  $rulesRegulation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rule = RulesRegulation::findOrFail($id);
        return view('admin.rulesandregulations.edit', compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RulesRegulation  $rulesRegulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = RulesRegulation::findOrFail($id);
        $request->validate([
            'rules' => 'required'
        ]);

        $rule->rules = $request->rules;
        if (!$rule)
        {
            return redirect()->route('rulesregulations.index')->with('error', 'There was some error');
        }
        $rule->save();
        return redirect()->route('rulesregulations.index')->with('success', 'Rules and Regulation section saved successfully');
    }
}
