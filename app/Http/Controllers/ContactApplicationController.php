<?php

namespace App\Http\Controllers;

use App\Models\ContactApplication;
use Illuminate\Http\Request;

class ContactApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = ContactApplication::all();
        return view('back.contact-application.index' , compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ContactApplication $application)
    {
        return view('front.pages.contact' , compact('application'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , ContactApplication $application)
    {

        $data = $request->validate([
           
            'applicant_name' => ['nullable'],
            'applicant_email' => ['nullable'],
            'details' => ['nullable'],
            'phone' => ['nullable']
        ]);

        $data['slug'] = $application->applicant_name;
        
        $application = ContactApplication::create($data);

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactApplication $application)
    {
        $application->delete();
        return redirect()->back()->with('status', 'Application has been removed');

    }
}
