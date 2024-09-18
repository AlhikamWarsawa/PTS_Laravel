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
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">ID</th>
            <th scope="col" class="px-4 py-3">Nama Lengkap</th>
            <th scope="col" class="px-4 py-3">Tempat Lahir</th>
            <th scope="col" class="px-4 py-3">Tanggal Lahir</th>
            <th scope="col" class="px-4 py-3">Alamat</th>
            <th scope="col" class="px-4 py-3">Asal Sekolah</th>
            <th scope="col" class="px-4 py-3">Email</th>
            <th scope="col" class="px-4 py-3">Foto</th>
            <th scope="col" class="px-4 py-3">Scan KK</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswa)
            <tr>
                <td class="border px-4 py-2">{{ $siswa->id }}</td>
                <td class="border px-4 py-2">{{ $siswa->Nama_Lengkap }}</td>
                <td class="border px-4 py-2">{{ $siswa->Tempat_Lahir }}</td>
                <td class="border px-4 py-2">{{ $siswa->Tanggal_Lahir }}</td>
                <td class="border px-4 py-2">{{ $siswa->Alamat }}</td>
                <td class="border px-4 py-2">{{ $siswa->Asal_Sekolah }}</td>
                <td class="border px-4 py-2">{{ $siswa->Email }}</td>
                <td class="border px-4 py-2"><img src="{{ asset('storage/' . $siswa->Foto) }}" alt="Foto" class="w-16 h-16 object-cover"></td>
                <td class="border px-4 py-2"><a href="{{ asset('storage/' . $siswa->Scan_KK) }}" target="_blank">Lihat Scan KK</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $siswas->links() }}
    </div>

{{--PAGINATION--}}
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
        Showing
        <span class="font-semibold text-gray-900 dark:text-white">{{ $siswas->firstItem() }}</span>
        to
        <span class="font-semibold text-gray-900 dark:text-white">{{ $siswas->lastItem() }}</span>
        of
        <span class="font-semibold text-gray-900 dark:text-white">{{ $siswas->total() }}</span>
    </span>
        <ul class="inline-flex items-stretch -space-x-px">
            @if ($siswas->onFirstPage())
                <li>
                <span class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                </li>
            @else
                <li>
                    <a href="{{ $siswas->previousPageUrl() }}" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            @endif

            @foreach ($siswas->links()->elements[0] as $page => $url)
                @if ($page == $siswas->currentPage())
                    <li>
                        <span class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            @if ($siswas->hasMorePages())
                <li>
                    <a href="{{ $siswas->nextPageUrl() }}" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            @else
                <li>
                <span class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                </li>
            @endif
        </ul>
    </nav>
@endsection
</body>
</html>
