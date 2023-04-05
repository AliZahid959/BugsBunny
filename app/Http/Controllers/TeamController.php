<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('back.pages.team.index' , compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Team $team)
    {
        $data = $request->validate([
            'team_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:teams" ],
            'team_image' => ['nullable'],
            'status' => ['required'],
            'designation' => ['required'],
            'social_link' => ['required']
        ]);

        if($request->has('team_image')){
            $imageName = time().'.'.$request->team_image->extension();
            $request->team_image->move(public_path('images/team_image/'), $imageName);

           $data['team_image'] = $imageName;   
        }

        $data['slug'] = Str::slug($request->team_name);

        Team::create($data);

        return redirect()->route('team.index')->with('status', 'A New Member as been created');

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
    public function edit(Team $team)
    {
        return view('back.pages.team.edit' , compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'team_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:teams" ],
            'team_image' => ['nullable'],
            'status' => ['required'],
            'designation' => ['required'],
            'social_link' => ['required']

        ]);

        if($request->has('team_image')){
            $imageName = time().'.'.$request->team_image->extension();
            $request->team_image->move(public_path('images/team_image/'), $imageName);

           $data['team_image'] = $imageName;       
         }

        $data['slug'] = Str::slug($request->team_name);

        $team->update($data);

        return redirect()->route('team.index')->with('status', 'A New Member as been created');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('status', 'Member has been removed');
    }
}
