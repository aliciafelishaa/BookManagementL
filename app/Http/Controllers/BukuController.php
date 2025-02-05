<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('buku.create', compact('penerbit', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'judul' => 'required | max: 255',
            'pengarang' => 'required | max: 100',
            'tahun_terbit' => 'required | max: 100',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
        ]);
        Buku::create($validateData);
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku','penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        // dd($request);
        // Validasi data yang diterima dari form

        $validateData = $request->validate([
            'judul' => 'required | max: 255',
            'pengarang' => 'required | max: 100',
            'tahun_terbit' => 'required | max: 100',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
        ]);

        // Update data buku
        $buku->update($validateData);

        // Redirect ke halaman daftar buku
        return redirect()->route('buku.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
