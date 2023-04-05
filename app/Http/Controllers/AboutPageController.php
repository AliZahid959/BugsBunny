<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutPage::first();
        return view('back.pages.about.index' , compact('about'));
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
    public function store(Request $request , AboutPage $about)
    {
        
        $data = $request->validate([
            'about_our_agency_heading' => ['nullable'],
            'about_our_agency_description' => ['nullable'],
            'about_our_agency_image' => ['nullable'],
            'why_choose_us_heading' => ['nullable'],
            'why_choose_us_description' => ['nullable'],
            'why_choose_us_image' => ['nullable'],

        ]);

        if($request->has('about_our_agency_image')){
             
            $imageName = time().'.'.$request->about_our_agency_image->extension();
            $request->about_our_agency_image->move(public_path('images/about_our_agency_image/'), $imageName);

           $data['about_our_agency_image'] = $imageName;    
        }

        if($request->has('why_choose_us_image')){
            $imageName = time().'.'.$request->why_choose_us_image->extension();
            $request->why_choose_us_image->move(public_path('images/why_choose_us_image/'), $imageName);

           $data['why_choose_us_image'] = $imageName;       
        
        }

        $about = AboutPage::first();

        $about->update($data);

        return back()->with('status', 'About Page Setting has been updated');
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
    public function destroy($id)
    {
        //
    }
}
