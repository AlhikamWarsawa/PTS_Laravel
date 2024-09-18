<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('Jurusan.Jurusan', compact('jurusans'));
    }

    public function jurusanSiswa()
    {
        $jurusans = Jurusan::all();
        return view('Jurusan.JurusanSiswa', compact('jurusans'));
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Jurusan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'jurusan' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        // Buat instance baru dari model Jurusan
        $jurusan = new Jurusan();
        $jurusan->Jurusan = $request->jurusan;
        $jurusan->Detail = $request->detail;

        // Simpan data ke database
        $jurusan->save();

        // Redirect ke halaman daftar jurusan
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JurusanController $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JurusanController $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JurusanController $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JurusanController $jurusan)
    {
        //
    }
}
