<?php

namespace App\Http\Controllers;

use App\Models\SafetyTip;
use Illuminate\Http\Request;

class SafetyTipController extends Controller
{
    /**
     * Show the form for adding a new safety tip.
     */
    public function create()
    {
        // Agar blade me tips show karni ho to fetch karo, otherwise remove
        $tips = SafetyTip::all(); 
        return view('add_safetytip', compact('tips'));
    }

    /**
     * Store a newly created safety tip.
     */
    public function add(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $tip = new SafetyTip();
        $tip->title = $request->title;
        $tip->description = $request->description;

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('uploads/safetytips'), $filename);
            $tip->image = $filename;
        }

        $tip->save();

        return redirect('/stips/table')->with('success', 'Safety Tip added successfully!');
    }

    /**
     * Display all tips as cards (frontend/admin view).
     */
    public function fetchcards()
    {
        $tips = SafetyTip::all();
        return view('Admin.safetytip_cards', compact('tips'));
    }

    /**
     * Display all tips in table (admin view).
     */
    public function fetchtable()
    {
        $tips = SafetyTip::all();
        return view('Admin.safetytip_table', compact('tips'));
    }

    /**
     * Remove the specified tip.
     */
    public function delete($id)
    {
        $tip = SafetyTip::findOrFail($id);

        if ($tip->image && file_exists(public_path('uploads/safetytips/' . $tip->image))) {
            @unlink(public_path('uploads/safetytips/' . $tip->image));
        }

        $tip->delete();

        return redirect('/stips/table')->with('success', 'Safety Tip deleted successfully!');
    }

    /**
     * Show the form for editing a tip.
     */
    public function search($id)
    {
        $tip = SafetyTip::findOrFail($id);
        return view('Admin.edit_safetytip', compact('tip'));
    }

    /**
     * Update the specified tip.
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $tip = SafetyTip::findOrFail($id);
        $tip->title = $request->title;
        $tip->description = $request->description;

        if ($request->hasFile('image')) {
            if ($tip->image && file_exists(public_path('uploads/safetytips/' . $tip->image))) {
                @unlink(public_path('uploads/safetytips/' . $tip->image));
            }

            $filename = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('uploads/safetytips'), $filename);
            $tip->image = $filename;
        }

        $tip->save();

        return redirect('/stips/table')->with('success', 'Safety Tip updated successfully!');
    }
}
