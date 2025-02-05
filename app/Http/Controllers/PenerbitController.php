<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_penerbit' => 'required | max: 100',
        ]);

        Penerbit::create($validateData);

        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        // dd($request);
        // Validasi data yang diterima dari form

        $validateData = $request->validate([
            'nama_penerbit' => 'required|max:100',
        ]);

        // Update data Penerbit
        $penerbit->update($validateData);

        // Redirect ke halaman daftar Penerbit
        return redirect()->route('penerbit.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        return redirect()->route('penerbit.index');
    }
}
