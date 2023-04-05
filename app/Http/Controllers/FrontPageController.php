<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Work;
use App\Models\Career;
use App\Models\careers;
use App\Models\Services;
use App\Models\AboutPage;
use App\Models\SiteContent;
use Illuminate\Http\Request;
use App\Models\ContactApplication;

class FrontPageController extends Controller
{

    public function index()
    {
        $services = Services::where('status','Publish')->take(3)->get();
        $team = Team::where('status','Publish')->take(4)->get();
        $work = Work::where('status','Publish')->get();
        $services_count = Services::count();
        $team_count = Team::count();
        $project_count = Work::count();
        $application_count = ContactApplication::count();
        $applications = ContactApplication::all();
        return view('home' , compact('services' , 'team' , 'work' , 'services_count' , 'team_count' , 'project_count' ,'application_count'));

    }

    public function about()
    {
        $about = AboutPage::first();
        return view('front.pages.about' , compact( 'about'));

    }

    public function contact()
    {

        return view('front.pages.contact' , compact('settings'));

    }

    public function services()
    {

        $services = Services::where('status','Publish')->get();
        return view('front.pages.services.index' , compact('services'));

    }

    public function service(Services $service){

        return view('front.pages.services.show' , compact('service'));

    }

    public function teams()
    {

        $team = Team::where('status','Publish')->get();
        return view('front.pages.team.index' , compact('team'));

    }

    public function team(Team $team){

        return view('front.pages.team.show' , compact('service'));

    }

    public function OurWorks(){

        $work = Work::where('status','Publish')->get();
        return view('front.pages.work.index' , compact('work'));

    }

    public function Ourwork(Work $work){

        return view('front.pages.work.show' , compact('work'));

    }

    public function careers(){

        $careers = careers::where('status' , 'Publish')->get();
        return view('front.pages.careers.index' , compact('careers'));

    }

    public function career(careers $careers){

        return view('front.pages.careers.show' , compact('careers'));

    }


}
