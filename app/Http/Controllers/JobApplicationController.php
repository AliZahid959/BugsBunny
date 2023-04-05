<?php

namespace App\Http\Controllers;

use App\Models\careers;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_application = JobApplication::all();
        return view('back.job-application.index' , compact('job_application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(JobApplication $job_application)
    {
        return view('front.pages.job-application.application' , compact('job_application'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , JobApplication $job_application)
    {
        
        $data = $request->validate([
           
            'name' => ['required'],
            'email' => ['required'],
            'phone_no' => ['required'],
            'cv' => ['required']
        ]);

        // $data['careers_id'] = $careers->id;

        $data['slug'] = $request->name;

        $job_application = JobApplication::create($data);

        return redirect()->back()->with('status', 'Your Application Has been Submitted We Will Contact You');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $job_application)
    {
        $data = $request->validate([
           
            'name' => ['required'],
            'email' => ['required'],
            'phone_no' => ['required'],
            'cv' => ['required']
        ]);

        $data['slug'] = $job_application->name;

        $job_application->update($data);

        return redirect()->back()->with('status', 'Your Application Has been Submitted We Will Contact You');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $job_application)
    {
        $job_application->delete();
        return redirect()->back()->with('status', ' Application Has been Deleted');

    }
}
