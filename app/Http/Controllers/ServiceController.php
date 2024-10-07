<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use DB;
class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string',
            'description' => 'required|string',
        ]);


        Service::create([
            'title' => $request->input('title'),
            'icon' => $request->input('icon'),
            'description' => $request->input('description'),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Service added successfully.');
    }


    

    public function update(Request $request, $id)
    {
        // Validate the form input
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        
        DB::table('services_descriptions')->where('id', $id)->update([

            'description' => $request->description,
            'updated_at' => now(), 

        ]);

        return redirect()->route('service_create')->with('sucess', 'Service description updated successfully.');
    }



    public function destroy($id)
    {

    $service = DB::table('services')->where('id', $id)->first();

    if ($service) {

        DB::table('services')->where('id', $id)->delete();

  
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

    return redirect()->back()->with('error', 'Service not found.');
   }



}

