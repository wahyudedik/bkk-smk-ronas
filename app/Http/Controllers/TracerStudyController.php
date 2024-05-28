<?php

namespace App\Http\Controllers;

use App\Models\TracerStudy;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracerStudies = TracerStudy::all();
        return view('user.tracerStudy', compact('tracerStudies'));
    }

    /**
     * Show the form for creating a new resource. 
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'graduationYear' => 'required',
            'major' => 'required',
            'furtherStudy' => 'required',
            'institution' => '',
            'program' => '',
            'educationLevel' => '',
            'educationStatus' => '',
            'employmentStatus' => 'required',
            'companyName' => '',
            'industry' => '',
            'jobTitle' => '',
            'startdate' => '',
            'endDate' => '',
            'companyAddress' => '',
            'salary' => '',
            'jobMatch' => '',
            'previousJob' => 'required',
            'previousJobDescription' => 'required',
            'skillsFromSmk' => 'required',
            'skillDescription' => 'required',
            'additionalSkills' => 'required',
            'suggestions' => 'required',
            'careerPlans' => 'required',
            'challenges' => 'required',
            'advice' => 'required',
        ]);

        TracerStudy::create($request->except('_token'));


        return redirect()->route('tracerStudy.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TracerStudy $tracerStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TracerStudy $tracerStudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TracerStudy $tracerStudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TracerStudy $tracerStudy)
    {
        //
    }
}
