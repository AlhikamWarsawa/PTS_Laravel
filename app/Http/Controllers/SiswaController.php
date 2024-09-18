<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::paginate(10);
        return view('pendaftaran.tableSiswa', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.siswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Lengkap' => 'required|string|max:255',
            'Tempat_Lahir' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|date',
            'Alamat' => 'required|string|max:255',
            'Asal_Sekolah' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Scan_KK' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = new Siswa($request->except(['Foto', 'Scan_KK']));

        if ($request->hasFile('Foto')) {
            $fotoPath = $request->file('Foto')->store('fotos', 'public');
            $siswa->Foto = $fotoPath;
        }

        if ($request->hasFile('Scan_KK')) {
            $scanKKPath = $request->file('Scan_KK')->store('scan_kk', 'public');
            $siswa->Scan_KK = $scanKKPath;
        }

        $siswa->save();

        return redirect()->route('siswas.index');
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
