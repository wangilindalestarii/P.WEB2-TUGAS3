@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="post">
                    @csrf

                    <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <!-- <input type="text" name="user_id" class="form-control col-md-9" placeholder="Masukkan Nama"> -->
                            <select name="user_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih User--</option>
                            @foreach ($user as $u)
                            <option value="{{ $u->id}}" {{ $mahasiswa->user_id == $u->id ? 'selected' : ''}} >{{$u->name }}</option>

                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM" value="{{is_null($mahasiswa) ? '' : $mahasiswa->npm }}">
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir" value="{{is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir" value="{{is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Telepon</label>
                            <input type="text" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telpon" value="{{is_null($mahasiswa) ? '' : $mahasiswa->telepon }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Alamat</label>
                            <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat" value="{{is_null($mahasiswa) ? '' : $mahasiswa->alamat }}">
                        </div>

                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                            <option value="laki" {{ $mahasiswa->gender == 'laki' ? 'selected' : ''}}>Laki-laki</option>
                            <option value="perempuan" {{ $mahasiswa->gender == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
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
