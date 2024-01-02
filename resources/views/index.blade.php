@extends('layouts.template')

@section('content')
    <h1 class="text-xl font-bold uppercase mt-10">Selamat Datang {{ Auth::user()->status }}</h1>
    <div class="relative overflow-x-auto shadow sm:rounded-lg mt-4">
        <div class="flex  justify-between mb-3">
            <h2 class="text-xl font-bold mb-3">Data Mahasiswa</h2>
            @can('admin')
                <button class="ml-3 bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded"><a
                        href="/pdf">Dowload Laporan</a></button>
            @endcan



        </div>



        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nim
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fakultas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jurusan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Hp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr
                        class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('images/' . $data->foto) }}" alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $data->nama }} </div>
                                <div class="font-normal text-gray-500">{{ $data->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->nim }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->fakultas }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->jurusan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->no_hp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->alamat }}
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex space-x-4 ">
                                <a href="/delete/{{ $data->id }}"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                                <a href="/update/{{ $data->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- Edit user modal -->
        <div id="editUserModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">

        </div>
    </div>
@endsection
