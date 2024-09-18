<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
@extends('Layout.NavbarSiswa')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Jurusan</h1>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">ID</th>
                <th scope="col" class="px-4 py-3">Jurusan</th>
                <th scope="col" class="px-4 py-3">Detail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jurusans as $jurusan)
                <tr>
                    <td class="border px-4 py-2">{{ $jurusan->id }}</td>
                    <td class="border px-4 py-2">{{ $jurusan->Jurusan }}</td>
                    <td class="border px-4 py-2">{{ $jurusan->Detail }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>
</html>
