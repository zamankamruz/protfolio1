<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }


    
    public function about(){

        $about = DB::table('abouts')->get();

        return view('admin.admin_page.about', ['abouts'=>$about]);
    }

    public function hero(){


        $hero =DB::table('hero_sections')->get();


        return view('admin.admin_page.hero', ['heroaction'=>$hero]);
    } 
    
    
    
    public function navber_create(){

        $Settings =DB::table('navbers')->get();

        return view('admin.admin_page.navber_create',['Settings'=> $Settings]);

       


    } public function navber_list(){
        return view('admin.admin_page.navber_list');
    }



    public function protfolio_create(){
        return view('admin.admin_page.protfolio_create');
    }

    public function protfolio_list(){
        return view('admin.admin_page.protfolio_list');
    }


    public function resume(){

        $remes =DB::table('resumes')->get();
        

        return view('admin.admin_page.resume', [

            'resume'=>$remes,
        
        ]);
    }






    public function resume_list(){

        $education =DB::table('educations')->get();
        $experiences =DB::table('experiences')->get();
        
       return view('admin.admin_page.resume_list', [

      
        'educations'=>$education,
        'experices'=>$experiences,


    
    
         ]);


    }


    public function destroy($id)
    {
        $education = DB::table('educations')->where('id', $id);

        $education->delete();
    
        return redirect()->back()->with('success', 'Education record deleted successfully');
    }
    




    public function experience_destroy($id)
    {
        $expernces = DB::table('experiences')->where('id', $id);

        $expernces->delete();
    
        return redirect()->back()->with('success', 'Education record deleted successfully');
    }




    public function service_create(){
          
        $Services_description= DB::table('services_descriptions')->get();

        return view('admin.admin_page.service_create', [

            'Services_description' => $Services_description,

        ]);
    }
    public function service_list(){

        $services= DB::table('services')->get();


        return view('admin.admin_page.service_list', ['services'=> $services]);
    }


    public function contact(){

        $contact = DB::table('contacts')->get();

        return view('admin.admin_page.contact', [
            'contact'=> $contact, 
        ]);
    }




    public function skills(){
       
        $skill= DB::table('skillsabouts')->get();
        $skilldata= DB::table('skills')->get();


        return view('admin.admin_page.skills', [
            'skillabout'=>$skill,
            'skilldatas' => $skilldata,
        ]);
    }




    public function statas(){
           
        $statas = DB::table('statas')->get();


        return view('admin.admin_page.statas', [
            'stats' => $statas,
        ]);
    }



    public function testimonials_create(){
        return view('admin.admin_page.testimonials_create');
    }
    public function testimonials_list(){
        return view('admin.admin_page.testimonials_list');
    }



}
