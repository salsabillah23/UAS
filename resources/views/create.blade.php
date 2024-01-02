@extends('layouts.template')

@section('content')
<div class=" w-full max-w-2xl max-h-full mx-auto mt-10 shadow">
    <!-- Modal content -->
    <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" action="/create" method="POST" enctype="multipart/form-data">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Tambah Data Mahasiswa 
            </h3>
            
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                @csrf
                
                <div class="col-span-6 sm:col-span-3">
                    <label for="first-name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="first-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nim</label>
                    <input type="text" name="nim" id="last-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
                    <input type="text" name="fakultas" id="last-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                    <input type="text" name="jurusan" id="last-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="phone-number"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Hp</label>
                    <input type="number" name="no_hp" id="phone-number"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="department"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" name="alamat" id="department"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="" >
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input type="file" name="foto" id="company"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div
            class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
        </div>
    </form>
</div>
@endsection