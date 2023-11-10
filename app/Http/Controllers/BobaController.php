<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Boba;

class BobaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // we get data here from database 
    public function index()
    {
        $boba = Boba::get();
        //dd($boba); //check if the database is connected 
        return view("boba",[
            'best_boba' =>'Black Milk Tea' ,
            'boba' => $boba
        ]);
    }
    public function about()
    {
        return view('about');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function list()
    {
        $boba = Boba::get();
        //dd($boba); //check if the database is connected 
        return view("list",[
            'boba' => $boba
        ]); 
    }
    /**
     * Show the form for creating a new resource.
     */
   


    public function create()
    {
        return view('boba.create');
    }
    

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' =>'required',
        ]);
        Boba::create($data);

        return redirect()->route('boba.index');
    
    }
    public function edit(Boba $boba)
    {
        return view('editb', compact('boba'));
    }
    public function update(Request $request, Boba $boba)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
    
        $boba->update($data);
    
        return redirect()->route('boba.index')->with('success', 'Boba item updated successfully.');
    }
    
    

    
    public function destroy(Boba $boba)
    {
        $boba->delete();
        return redirect()->route('boba.index');
    }
}