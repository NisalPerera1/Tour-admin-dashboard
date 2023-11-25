<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $blogs = Blog::all();
    
            return view('blogs.index', compact('blogs'));
        }
    
        public function create()
        {
            return view('blogs.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'author' => 'required|string',
                'content' => 'required|string',
                // Add any other validation rules for your attributes
            ]);
    
            Blog::create($request->all());
            return response()->json(['message' => 'Blog created successfully']);
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
