<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('back.pages.service.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.service.create');
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
            'service_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:services"],
            'service_image' => ['nullable'],
            'status' => ['required']
        ]);
    

        if($request->has('service_image')){

            $imageName = time().'.'.$request->service_image->extension();
            $request->service_image->move(public_path('images/service/'), $imageName);

           $data['service_image'] = $imageName;
        }

        $data['slug'] = Str::slug($request->service_name);

        Services::create($data);

        return redirect()->route('service.index')->with('status', 'A New Service as been created');

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
    public function edit(Services $service)
    {
        return view('back.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $data = $request->validate([
            'service_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:services" ],
            'service_image' => ['nullable'],
            'status' => ['required']
        ]);

     
        if($request->has('service_image')){

            $imageName = time().'.'.$request->service_image->extension();
            $request->service_image->move(public_path('images/service/'), $imageName);

           $data['service_image'] = $imageName;
        }

        $data['slug'] = Str::slug($request->service_name);

        $service->update($data);

        return redirect()->route('service.index')->with('status', 'A New Service as been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('status', 'A Service has been removed');
    }
}
