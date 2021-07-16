@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa

                <a href="{{ route('create.mahasiswa')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NAMA</th>
                                <th>NPM</th>
                                <th>TEMPAT,TANGGAL LAHIR</>
                                <th>JENIS KELAMIN</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                
                                <th>AKSI</th>
                            </tr>
                            @php
                                $id = 1;
                            @endphp
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $mhs->user->name}}</td>
                                <td>{{ $mhs->npm}}</td>
                                <td>{{ $mhs->tempat_lahir.', '. $mhs->tgl_lahir}}</td>
                                <td>{{ $mhs->gender}}</td>
                                <td>{{ $mhs->telepon}}</td>
                                <td>{{ $mhs->alamat}}</td> 
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $mhs->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $mhs->id)}}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
