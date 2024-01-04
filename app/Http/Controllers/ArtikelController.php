<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        $artikel = Artikel::paginate(5);
        return view('artikel.index', ['artikel' => $artikel]);
    }

    public function search(Request $request)
    {
        $keyword = $request->cari;
        $artikel = Artikel::where('judul', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('isi_artikel','LIKE','%'.$keyword.'%')
                    ->orWhere('tag_jenis_artikel','LIKE','%'.$keyword.'%')->paginate(5);
        
        return view('artikel.index', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        if ($request->file('foto_artikel')) {
            $file = $request->file('foto_artikel');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);

            $artikel = Artikel::create([
                'judul' => $request->judul,
                'isi_artikel' => $request->isi_artikel,
                'tag_jenis_artikel' => $request->tag,
                'foto_artikel' => $filename
            ]);

            $artikel->save();
            return redirect()->route('artikel.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::where('id', $id)->first();
        return view('artikel.detail-example', ['artikel' => $artikel, 'galeri'=> true]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = Artikel::where('id', $id)->first();
        return view('artikel.edit', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->tag_jenis_artikel = $request->tag;
        if ($request->file('foto_artikel')) {
            $file = $request->file('foto_artikel');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);

            $artikel->foto_artikel = $filename;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
