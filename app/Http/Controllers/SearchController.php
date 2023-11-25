<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Validate the search query
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');

        // Check if the query is not empty before searching
        if ($query) {
            $results = Tour::where('name', 'like', '%' . $query . '%')->get();
        } else {
            $results = [];
        }

        return response()->json($results);
    }

    public function autocomplete(Request $request)
    {
        $term=$request->term;
        $data = Tour::where('name','LIKE','%'.$term.'%')
        ->take(10)
        ->get();
        $results=array();
        foreach ($data as $key => $v){
            $results[]=['value' =>$v->item];
        }
        return response()->json($results);
}


}
