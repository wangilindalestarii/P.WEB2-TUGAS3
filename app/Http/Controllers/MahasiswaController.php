<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;


class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit.mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeahh Berhasil Mengedit Data','success');
        return redirect()->route('mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa= Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Yeahh Berhasil Menghapus Data','success');
        return redirect()->route('mahasiswa');
    }

}
