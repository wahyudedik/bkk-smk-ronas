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
            'fullName',
            'gender',
            'birthDate',
            'address',
            'phone',
            'email',
            'graduationYear',
            'major',
            'furtherStudy',
            'institution',
            'program',
            'educationLevel',
            'educationStatus',
            'employmentStatus',
            'companyName',
            'industry',
            'jobTitle',
            'startDate',
            'companyAddress',
            'salary',
            'jobMatch',
            'previousJob',
            'skillsFromSMK',
            'additionalSkills',
            'skillsToImprove',
            'trainings',
            'certifications',
            'curriculumSatisfaction',
            'facilitiesSatisfaction',
            'suggestions',
            'careerPlans',
            'challenges',
            'advice',
        
        ]);

        TracerStudy::create($request->except('_token'));

        return redirect()->route('tracer-study.index')->with('success', 'Tracer Study created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tracerStudy = TracerStudy::findOrFail($id);

        // TODO: Refactor the code to use route model binding
        // https://laravel.com/docs/8.x/routing#route-model-binding

        return view('user.tracerStudyShow', ['tracerStudy' => $tracerStudy]);
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
