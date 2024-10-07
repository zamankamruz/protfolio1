<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title'        => 'string|max:255',
            'description'  => 'string',
            'profile_image'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'name'         => 'string|max:255',
            'about'        => 'string',
            'birthday'     => 'string|max:255',
            'website'      => 'max:255',
            'phone'        => 'string|max:20',
            'city'         => 'string|max:255',
            'age'          => 'integer',
            'degree'       => 'string|max:255',
            'email'        => 'email|max:255',
            'freelance'    => 'string|max:255',
            'summary'      => 'string',
        ]);
    
        // Fetch the specific about record by its id
        $about = DB::table('abouts')->where('id', $id)->first();
    
        // Ensure $about exists before updating
        if (!$about) {
            return redirect()->back()->with('error', 'About section not found.');
        }
    
        // Handle the profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete the old profile image if it exists
            if ($about->profile_image) {
                Storage::delete('public/about_images/' . $about->profile_image);
            }
    
            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->storeAs('public/about_images', $imageName);
    
            // Update the new image in the database
            DB::table('abouts')->where('id', $about->id)->update([
                'profile_image' => $imageName
            ]);
        }
    
        // Update other fields in the database
        DB::table('abouts')->where('id', $about->id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'name'        => $request->name,
            'about'       => $request->about,
            'birthday'    => $request->birthday,
            'website'     => $request->website,
            'phone'       => $request->phone,
            'city'        => $request->city,
            'age'         => $request->age,
            'degree'      => $request->degree,
            'email'       => $request->email,
            'freelance'   => $request->freelance,
            'summary'     => $request->summary,
        ]);
    
        return redirect()->back()->with('success', 'About section updated successfully.');
    }
    
}
