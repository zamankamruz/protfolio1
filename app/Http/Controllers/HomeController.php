<?php



namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pudata = DB::table('navbers')->get();
        $herosection = DB::table('hero_sections')->get();
        $about = DB::table('abouts')->get();
        $statas = DB::table('statas')->get();
        $skills = DB::table('skills')->get();
        $skillabout = DB::table('skillsabouts')->get();
        $resumes = DB::table('resumes')->get();
        $educations = DB::table('educations')->get();
        $experiences = DB::table('experiences')->get();
        $portfolios = DB::table('portfolios')->get();
        $services_descriptions = DB::table('services_descriptions')->get();
        $services = DB::table('services')->get();
        $testimonials = DB::table('testimonials')->get();
        $contacts = DB::table('contacts')->get();




        return view('frontend.home', [
            'profile' => $pudata,
            'heroaction' => $herosection,
            'abouts' => $about,
            'statsa' => $statas,
            'skill' => $skills,
            'skillabout' => $skillabout,
            'resumes' => $resumes,
            'educations' => $educations,
            'experiences' => $experiences,
            'portfolios' => $portfolios,
            'services_descriptions' => $services_descriptions,
            'services' => $services,
            'testimonials' => $testimonials,
            'contacts' => $contacts,




        ]);
    }
}



