<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boba;
use Illuminate\Support\Facades\Validator;

class BobaController extends Controller
{
    public function index()
    {
        $boba = Boba::get();

        return view("boba", [
            'best_boba' => 'Black Milk Tea',
            'boba' => $boba
        ]);
    }

    public function get_boba()
    {
        $boba = Boba::get();

        return response()->json([
            'message' => 'Boba list',
            'status' => 'success',
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

        return view("list", [
            'boba' => $boba,
            'errors' => session('errors')
        ]);
    }

    public function create()
    {
        return view('boba.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('boba.index')
                ->with('error', 'Validation failed')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();
        Boba::create($data);

       // Set success message
    $successMessage = 'Boba item created successfully.';

    return redirect()->route('boba.index')->with('success', $successMessage);
}

    public function createBobaApi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $boba = Boba::create($data);

        return response()->json([
            'message' => 'Boba Created',
            'status' => 'success',
            'boba' => $boba,
        ]);
    }

    public function edit(Boba $boba)
    {
        return view('editb', compact('boba'));
    }

    public function update(Request $request, Boba $boba)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('boba.index')
                    ->with('error', 'Validation failed')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = $validator->validated();
        $boba->update($data);

         // Set success message
    $successMessage = 'Boba item updated successfully.';

    return redirect()->route('boba.index')->with('success', $successMessage);
}

    public function destroy(Boba $boba)
    {
        $boba->delete();
        return redirect()->route('boba.index');
    }
}
