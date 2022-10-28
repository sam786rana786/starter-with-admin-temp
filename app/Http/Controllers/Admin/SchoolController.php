<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function edit()
    {
        $school = School::findOrFail(1);
        return view('admin.school.edit', compact('school'));
    }

    public function update(Request $request)
    {
        $school = School::findOrFail(1);
        $school->student_enrolled = $request->student_enrolled;
        $school->awards_won = $request->awards_won;
        $school->years_completed = $request->years_completed;
        $school->total_teachers = $request->total_teachers;
        $school->save();
        return redirect()->back()->with('success', 'Data Updated Successfully');
    }
}
