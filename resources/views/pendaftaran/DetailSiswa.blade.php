@extends('Layout.NavbarSiswa')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Detail Siswa</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Informasi Pribadi</h2>
                <p><strong>Nama:</strong> {{ $siswa->Nama }}</p>
                <p><strong>Tempat Lahir:</strong> {{ $siswa->Tempat_Lahir }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $siswa->Tanggal_Lahir }}</p>
                <p><strong>Alamat:</strong> {{ $siswa->Alamat }}</p>
                <p><strong>Email:</strong> {{ $siswa->Email }}</p>
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Dokumen</h2>
                <p><strong>Foto:</strong></p>
                <img src="{{ asset('storage/' . $siswa->Foto) }}" alt="Foto" class="w-32 h-32 object-cover mb-4">
                <p><strong>Scan KK:</strong> <a href="{{ asset('storage/' . $siswa->Scan_KK) }}" target="_blank" class="text-blue-500">Lihat Scan KK</a></p>
            </div>
            <a href="{{ route('pendaftaran.tableSiswa') }}" class="text-blue-500">Kembali ke Daftar Siswa</a>
        </div>
    </div>
@endsection
