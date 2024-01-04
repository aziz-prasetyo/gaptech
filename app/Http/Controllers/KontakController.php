<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = Kontak::all();
        $pesan = Kontak::paginate(5);
        return view('pojokcurhat.index', ['pesan' => $pesan]);
    }

    public function search(Request $request)
    {
        $keyword = $request->cari;
        $pesan = Kontak::where('nama', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('no_telp','LIKE','%'.$keyword.'%')
                    ->orWhere('pesan','LIKE','%'.$keyword.'%')->paginate(5);
        
        return view('pojokcurhat.index', ['pesan' => $pesan]);
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
        $kontak = Kontak::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'pesan' => $request->pesan
        ]);

        $kontak->save();
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
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect()->route('kontak.index');
    }
}
