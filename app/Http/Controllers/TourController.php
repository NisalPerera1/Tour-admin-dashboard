<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number_of_days' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'destinations' => 'required|string',
        ]);
    
        // Create a new tour
        Tour:: create($request->all());
    

        return redirect()->route('tours.index')->with('success', 'Tour created successfully');
    }
    
    


    public function show(string $id)
    {
        // Show the details of a specific tour
        $tour = Tour::findOrFail($id);
        return view('tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Remove the specified tour from the database
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->route('tours.index');
    }

    // In TourController.php



}
