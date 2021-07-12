@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa')}}" method="post">
                    @csrf

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control col-md-9" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                        </div>

                        <div class="form-group">
                            <label for="name">Telepon</label>
                            <input type="text" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telpon">
                        </div>

                        <div class="form-group">
                            <label for="name">Alamat</label>
                            <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                        </div>

                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" class="form-control col-md-9">
                            <option value="laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="{{ route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
