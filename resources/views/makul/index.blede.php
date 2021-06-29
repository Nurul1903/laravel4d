@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Data Makul
                    <a href="{{ route('tambah_makul') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>NO</th>
                            <th>KODE MAKUL</th>
                            <th>NAMA MAKUL</th>
                            <th>SKS</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach ($makul as $mk)
                        <tr>
                            <td>{{ $makul->no }}</td>
                            <td>{{ $makul->kd_makul }}</td>
                            <td>{{ $makul->nama_makul }}</td>
                            <td>{{ $makul->sks }}</td>
                            
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        @endforeach
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
