<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_kategori' => 'required | max: 100',
        ]);

        Kategori::create($validateData);

        return redirect()->route('Kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        // dd($request);
        // Validasi data yang diterima dari form
        $validateData = $request->validate([
            'nama_kategori' => 'required|max:100',
        ]);

        // Update data kategori
        $kategori->update([
            'nama_kategori' => $request['nama_kategori']
        ]);
        // dd("success");

        // Redirect ke halaman daftar kategori
        return redirect()->route('Kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        // return redirect()->route('Kategori.index');
        return view('kategori.index');
    }
}
