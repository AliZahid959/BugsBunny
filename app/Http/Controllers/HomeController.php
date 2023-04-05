<?php

namespace App\Http\Controllers;

use App\Models\ContactApplication;
use App\Models\Team;
use App\Models\Work;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services_count = Services::count();
        $team_count = Team::count();
        $project_count = Work::count();
        $application_count = ContactApplication::count();
        $applications = ContactApplication::all();

        return view('back.dashboard' , compact('services_count' , 'team_count' , 'project_count' , 'application_count' , 'applications'));
    }
}
