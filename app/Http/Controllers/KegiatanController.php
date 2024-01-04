<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('testing.kegiatan.index', ['kegiatan'=> $kegiatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('testing.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file('foto_kegiatan')){
            $file= $request->file('foto_kegiatan');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
           
            $kegiatan = Kegiatan::create([
            'judul_kegiatan' => $request->judul_kegiatan,
            'foto_kegiatan'=>$filename
            ]);

            $kegiatan->save();
            return redirect()->route('kegiatan.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::where('id',$id)->first();
        return view('testing.kegiatan.show', ['kegiatan'=> $kegiatan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = kegiatan::where('id',$id)->first();
        return view('testing.kegiatan.edit', ['kegiatan'=> $kegiatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->judul_kegiatan = $request->judul_kegiatan;
        if($request->file('foto_kegiatan')){
            $file= $request->file('foto_kegiatan');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $kegiatan->foto_kegiatan = $filename;
        }

        $kegiatan->save();
        return view('testing.kegiatan.edit', ['kegiatan'=> $kegiatan]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
    }
}
