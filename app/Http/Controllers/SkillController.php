<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class SkillController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required',
            'number' => 'required|numeric|min:0|max:100', 
        ]);

        DB::table('skills')->insert([
            'name' => $request->name,
            'percentage' => $request->percentage,
            'number' => $request->number,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Skill added successfully.');
    }




    public function destroy($id)
{
    // Check if the skill exists
    $skill = DB::table('skills')->where('id', $id)->first();

    if (!$skill) {
        return redirect()->back()->with('error', 'Skill not found.');
    }

    // Delete the skill using the DB facade
    DB::table('skills')->where('id', $id)->delete();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Skill deleted successfully.');
}

}

