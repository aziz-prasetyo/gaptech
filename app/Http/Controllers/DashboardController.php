<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\CalonAnggota;
use App\Models\Galeri;
use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        $galeri = Galeri::all();
        $pesan = Kontak::all();
        $calonanggota = CalonAnggota::all();
        return view('dashboard', ['artikelCount'=>count($artikel),
                                    'galeriCount'=>count($galeri),
                                    'pesanCount'=>count($pesan),
                                    'calonanggotaCount'=>count($calonanggota)]);
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
