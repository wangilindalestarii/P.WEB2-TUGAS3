@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Nilai Mahasiswa
                    <a href="{{route('tambah.nilai')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <!-- <th>ID MATAKULIAH</th>
                                <th>ID MAHASISWA</th> -->
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>

                            @php
                                $id = 1;
                            @endphp

                            @foreach ($nilai as $nl)
                            <tr>
                                <td>{{( $id++)}}</td>
                                <td>{{( $nl->mahasiswa->npm)}}</td>
                                <td>{{( $nl->mahasiswa->user->name)}}</td>
                                <td>{{( $nl->makul->nama_makul)}}</td>
                                <td>{{( $nl->makul->sks)}}</td>
                                <td>{{( $nl->nilai)}}</td>
                                <td>
                                <a href="{{route('nilai.edit', $nl->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                                <a href="{{route('hapus.nilai', $nl->id)}}" class="btn btn-sm btn-danger">HAPUS</a>
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
