@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai')}}" method="post">
                        @csrf

                <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right">Nama Mahasiswa</label>
                    <div class="col-md-6">
                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                    <option value="" disabled selected>Pilih User</option>
                    @foreach ($user as $u)
                    <option value="{{ $u->id}}" >{{$u->name }}</option>
                    @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right">Nama Matakuliah</label>
                    <div class="col-md-6">
                    <select name="makul_id" id="makul_id"class="form-control">
                    <option value="" disabled selected>Pilih Makul</option>
                    @foreach ($makul as $mk)
                    <option value="{{ $mk->id }}" >{{$mk->nama_makul }} </option>
                    @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right">Nilai</label>
                    <div class="col-md-3">
                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai">
                </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 float-right">
                    <div class="col ">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <a href="{{ route('nilai')}}" class="btn btn-md btn-danger">BATAL</a>
                </div>
                </div>
                </div>
                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
