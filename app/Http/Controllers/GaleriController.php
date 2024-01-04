<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        $galeri = Galeri::paginate(5);

        return view('galeri.index', ['galeri' => $galeri]);
    }

    public function search(Request $request)
    {
        $keyword = $request->cari;
        $galeri = Galeri::where('judul_foto', 'LIKE', '%'.$keyword.'%')->paginate(5);
        return view('galeri.index', ['galeri' => $galeri]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('foto_galeri')) {
            $file = $request->file('foto_galeri');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);

            $galeri = Galeri::create([
                'judul_foto' => $request->judul_foto,
                'foto_galeri' => $filename
            ]);

            $galeri->save();
            return redirect()->route('galeri.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galeri = Galeri::where('id', $id)->first();
        return view('galeri.show', ['galeri' => $galeri]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeri = Galeri::where('id', $id)->first();
        return view('galeri.edit', ['galeri' => $galeri]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeri = Galeri::find($id);
        $galeri->judul_foto = $request->judul_foto;
        if ($request->file('foto_galeri')) {
            $file = $request->file('foto_galeri');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $galeri->foto_galeri = $filename;
        }

        $galeri->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return redirect()->route('galeri.index');
    }
}
