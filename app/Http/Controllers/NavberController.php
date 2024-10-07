<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NavberController extends Controller
{
    public function update(Request $request)
    {
        
        $settings = $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Profile image validation
            'site_name'     => 'string|max:255',
            'twitter'       => 'nullable|url',
            'facebook'      => 'nullable|url',
            'instagram'     => 'nullable|url',
            'google_plus'   => 'nullable|url',
            'linkedin'      => 'nullable|url',
        ]);

       
        $settings = DB::table('navbers')->first(); 

        if (!$settings) {
            return redirect()->back()->with('error', 'Navbar settings not found.');
        }

        if ($request->hasFile('profile_image')) {
            if ($settings->profile_image) {
                Storage::delete('public/profile_images/' . $settings->profile_image);
            }

            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->storeAs('public/profile_images', $imageName);

            DB::table('navbers')->where('id', $settings->id)->update([
                'profile_image' => $imageName
            ]);
        }

        DB::table('navbers')->where('id', $settings->id)->update([
            'site_name'   => $request->site_name,
            'twitter'     => $request->twitter,
            'facebook'    => $request->facebook,
            'instagram'   => $request->instagram,
            'google_plus' => $request->google_plus,
            'linkedin'    => $request->linkedin
        ]);

        return redirect()->back()->with('success', 'Navbar settings updated successfully.');
    }
}
