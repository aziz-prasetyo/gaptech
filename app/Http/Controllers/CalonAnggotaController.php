<?php

namespace App\Http\Controllers;

use App\Models\CalonAnggota;
use Illuminate\Http\Request;

class CalonAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calonanggota = CalonAnggota::all();
        $calonanggota = CalonAnggota::paginate(5);
        return view('calonanggota.index', ['calonanggota' => $calonanggota]);
    }

    public function search(Request $request)
    {
        $keyword = $request->cari;
        $calonanggota = CalonAnggota::where('nama', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('nik','LIKE','%'.$keyword.'%')
                    ->orWhere('umur','LIKE','%'.$keyword.'%')
                    ->orWhere('alamat','LIKE','%'.$keyword.'%')->paginate(5);
        
        return view('calonanggota.index', ['calonanggota' => $calonanggota]);
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
        $anggota = CalonAnggota::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        $anggota->save();
        return redirect('/');
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
        $anggota = CalonAnggota::find($id);
        $anggota->delete();
        return redirect()->route('calonanggota.index');
    }
}
