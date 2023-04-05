<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('back.pages.work.index' , compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.work.create');
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
            'work_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:works"],
            'work_image' => ['nullable'],
            'work_link' => ['nullable'],
            'status' => ['required']
        ]);


        if($request->has('work_image')){
            $imageName = time().'.'.$request->work_image->extension();
            $request->work_image->move(public_path('images/work_image/'), $imageName);

           $data['work_image'] = $imageName;         }

        $data['slug'] = Str::slug($request->work_name);

        Work::create($data);

        return redirect()->route('work.index')->with('status', 'A New Project has been created');
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
    public function edit(Work $work)
    {
        return view('back.pages.work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $data = $request->validate([
            'work_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:works"],
            'work_image' => ['nullable'],
            'work_link' => ['nullable'],
            'status' => ['required']
        ]);


        if($request->has('work_image')){
            $imageName = time().'.'.$request->work_image->extension();
            $request->work_image->move(public_path('images/work_image/'), $imageName);

           $data['work_image'] = $imageName;   

         }

        $data['slug'] = Str::slug($request->work_name);

        $work->update($data);

        return redirect()->route('work.index')->with('status', 'Project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index')->with('status', 'Project has been removed');
    }
}
