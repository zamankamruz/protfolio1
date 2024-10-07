<?php
namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use DB;

class ResumeController extends Controller
{
    public function storeResume(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Resume::create([
            'resumeintro' => $request->resumeintro,
            'summary' => $request->summary,
            'introduction' => $request->introdaction,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Resume information saved successfully!');
    }

    public function storeEducation(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'degree' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'institution' => 'required',
        ]);
    
        // Insert data using the DB facade
        DB::table('educations')->insert([
            'degree' => $request->degree,
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
            'institution' => $request->institution,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Education information saved successfully!');
    }
    

    public function storeExperience(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'experience_title' => 'required',
            'experience_company' => 'required',
            'experience_start_year' => 'required',
            'experience_end_year' => 'required',
            'experience_description' => 'required',
        ]);
    
        // Insert data into the 'experiences' table using the DB facade
        DB::table('experiences')->insert([
            'title' => $request->experience_title,
            'company' => $request->experience_company,
            'start_year' => $request->experience_start_year,
            'end_year' => $request->experience_end_year,
            'description' => $request->experience_description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Experience information saved successfully!');
    }
    
}
