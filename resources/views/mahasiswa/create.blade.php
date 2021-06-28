@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                    <div class="card-body">
                        <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                        @csrf 
                                <div class="form-group">
                                    <label for="user_id">User Id</label>
                                    <input type="number" name="user_id" class="form-control col-md-9" placeholder="Masukkan Nama">
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama Mahasiswa</label>
                                    <input type="text" name="name" class="form-control col-md-9" placeholder="Masukkan Nama">
                                </div>

                                <div class="form-group">
                                    <label for="date">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                                </div>

                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telpon">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                                </div>

                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender"class="form-control col-md-9">
                                    <option value="Laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Masukkan Gambar</label>
                                    <input type="file" name="foto" class="form-control col-md-9">
                                </div>
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa.index')}}" class="btn btn-md btn-danger">BATAL</a>
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
