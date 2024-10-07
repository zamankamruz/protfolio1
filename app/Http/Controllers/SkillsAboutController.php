<?php


namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Don't forget to include this

class SkillsAboutController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'skillabout' => 'required|string|max:555',
        ]);

        // Update the database entry
        DB::table('skillsabouts')->where('id', 1)->update([
                'skill_about' => $request->skillabout,
            ]);

        // Redirect or send success response
        return redirect()->back()->with('success', 'Skill information updated successfully.');
    }
}

