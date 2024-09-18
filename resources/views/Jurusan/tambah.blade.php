@extends('Layout.NavbarSiswa')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Tambah Jurusan</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('jurusan.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="jurusan" class="block text-sm font-medium text-gray-700">Nama Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="detail" class="block text-sm font-medium text-gray-700">Detail Jurusan</label>
                    <textarea name="detail" id="detail" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
