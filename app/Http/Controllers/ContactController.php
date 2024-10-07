<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:contacts,email,' . $id // Ensure the current contact is excluded from unique check
        ]);

        // Use DB facade to update the contact record
        DB::table('contacts')->where('id', $id)->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'updated_at' => now(),
        ]);

        return redirect()->route('dashboard.contact')->with('success', 'Contact information has been updated.');
    }
}
