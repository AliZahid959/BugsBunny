<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;

class SiteContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_content = SiteContent::first();
        return view('back.pages.site_content.index' , compact('site_content'));
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
    public function store(Request $request , SiteContent $site_content)
    {


        $data = $request->validate([
            'banner_image' => ['nullable'],
            'site_logo' => ['nullable'],
            'site_heading' => ['nullable'],
            'site_description' => ['nullable'],
            'social_link' => ['nullable'],
            'video' => ['nullable'],

        ]);

        if($request->has('banner_image')){
            $imageName = time().'.'.$request->banner_image->extension();
            $request->banner_image->move(public_path('images/banner_image/'), $imageName);

           $data['banner_image'] = $imageName;
        }

        if($request->has('site_logo')){
            $imageName = time().'.'.$request->site_logo->extension();
            $request->site_logo->move(public_path('images/site_logo/'), $imageName);

           $data['site_logo'] = $imageName;
        }

        if($request->has('video')){
            $imageName = time().'.'.$request->video->extension();
            $request->video->move(public_path('images/video/'), $imageName);

           $data['video'] = $imageName;
        }

        $site_content = SiteContent::first();

        $site_content->update($data);

        return back()->with('status', 'General Setting has been updated');


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
