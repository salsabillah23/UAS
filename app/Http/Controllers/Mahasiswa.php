<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\Pdf;

class Mahasiswa extends Controller
{
    public function index()
    {
        $datas = DB::table('mahasiswa')->get();
        return view('index', [
            'datas' => $datas
        ]);
    }

    public function delete($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $foto = request()->file('foto');
        $fotoName = $foto->hashName();
        $foto->move(public_path('images'), $fotoName);

        DB::table('mahasiswa')->insert([
            'nama' => request()->nama,
            'nim' => request()->nim,
            'fakultas' => request()->fakultas,
            'jurusan' => request()->jurusan,
            'email' => request()->email,
            'no_hp' => intval(request()->no_hp),
            'alamat' => request()->alamat,
            'foto' => $fotoName
        ]);

        return redirect('/');
    }

    public function update()
    {
        $foto = request()->file('foto');
        $fotoName = request()->input('fotoLama');

        if ($foto) {
            $fotoName = $foto->hashName();
            $foto->move(public_path('images'), $fotoName);
        }



        DB::table('mahasiswa')->where('id', request()->id)->update([
            'nama' => request()->nama,
            'nim' => request()->nim,
            'fakultas' => request()->fakultas,
            'jurusan' => request()->jurusan,
            'email' => request()->email,
            'no_hp' => request()->no_hp,
            'alamat' => request()->alamat,
            'foto' => $fotoName
        ]);

        return redirect('/');
    }

    public function updateStore($id)
    {
        $data = DB::table('mahasiswa')->where('id', $id)->first();
        return view('update', [
            'data' => $data
        ]);
    }


    public function generatePDF()
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }
        $datas = DB::table('mahasiswa')->get();
        $pdf = PDF::loadView('laporan', [
            'datas' => $datas 
        ]);

        return $pdf->download('laporan.pdf');
    }
}
