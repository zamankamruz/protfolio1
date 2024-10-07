<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{


    // Handle form submission and insert into the database
    public function store(Request $request , $id )
    {
        // Validate the input
      $request->validate([
            'happy_clients' => 'integer',
            'projects' => 'integer',
            'hours_of_support' => 'integer',
            'hard_workers' => 'integer',
        ]);

        $statas = DB::table('abouts')->where('id', $id)->first();



        // Insert into the stats table
        DB::table('statas')->where('id', $statas->id)->update([

            'happy_clients' => $request->input('happy_clients'),
            'projects' => $request->input('projects'),
            'hours_of_support' => $request->input('hours_of_support'),
            'hard_workers' => $request->input('hard_workers'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Stats inserted successfully!');
    }
}
