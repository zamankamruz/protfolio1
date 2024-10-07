<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

     
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/testimonials'), $imageName);

        DB::table('testimonials')->insert([
            'name' => $request->name,
            'position' => $request->position,
            'testimonial' => $request->testimonial,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }

}
