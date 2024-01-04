<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        $galeri = Galeri::all();
        return view('home', ['artikel' => $artikel, 'galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
