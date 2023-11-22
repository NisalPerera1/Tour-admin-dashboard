<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show a list of all destinations
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

public function search(Request $request)
{
    $query = $request->input('q');

    $destinations = Destination::where('name', 'like', "%$query%")
        ->get(['id', 'name']); // Adjust the fields based on your needs

    return response()->json($destinations);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        // Store a newly created destination in the database
        Destination::create($request->all());

        return redirect()->route('destinations.index')->with('success', 'Destination created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destination::findOrFail($id);
        return view('destinations.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = Destination::findOrFail($id);
        return view('destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request if necessary
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->update($request->all());

        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully');
    }
}
