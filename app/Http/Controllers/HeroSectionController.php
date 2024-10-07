<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function update(Request $request)
    {
        $settings = $request->validate([
            'person_name' => 'string|max:255', 
            'person_about' => 'string|max:255', 
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);

        $heroSection = DB::table('hero_sections')->first(); 

        if (!$heroSection) {
            return redirect()->back()->with('error', 'Hero section not found.');
        }

       
        if ($request->hasFile('background_image')) {
           
            if ($heroSection->background_image) {
                Storage::delete('public/hero_images/' . $heroSection->background_image);
            }

            $imageName = time() . '.' . $request->background_image->extension();
            $request->background_image->storeAs('public/hero_images', $imageName);

            DB::table('hero_sections')->where('id', $heroSection->id)->update([
                'background_image' => $imageName
            ]);
        }


        DB::table('hero_sections')->where('id', $heroSection->id)->update([
            'person_name'   => $request->person_name,
            'person_about'  => $request->person_about,
        ]);

        return redirect()->back()->with('success', 'Hero section updated successfully.');
    }
}
