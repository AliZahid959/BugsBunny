<?php

namespace App\Http\Controllers;

use App\Models\careers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = careers::all();
        return view('back.pages.careers.index' , compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'ideal_candidate' => ['required'],
            'required_skills' => ['required'],
            'other_requirments' => ['required'],
            'experience' => ['required'],
            'status' => ['required'],
            'what_are_we_offering' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'salary' => ['required']
        ]);

        $data['slug'] = Str::slug($request->title);

        careers::create($data);

        return redirect()->route('careers.index')->with('status', 'A New Job as been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(careers $careers)
    {
        return view('back.pages.careers.edit' , compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, careers $careers)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'ideal_candidate' => ['required'],
            'required_skills' => ['required'],
            'other_requirments' => ['required'],
            'experience' => ['required'],
            'status' => ['required'],
            'what_are_we_offering' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'salary' => ['required']


        ]);

        $data['slug'] = Str::slug($request->title);

        $careers->update($data);

        return redirect()->route('careers.index')->with('status', 'Job as been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(careers $careers)
    {

        $careers->delete();
        return redirect()->route('careers.index')->with('status', 'Job has been removed');

    }
}
