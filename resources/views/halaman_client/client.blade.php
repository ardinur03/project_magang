{{--  menghubungkan dengan konten view di master  --}}
@extends('master')

{{--  isi bagian title halaman client  --}}
@section ('title', 'Client')

{{--  isi bagian konten  --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Client</strong></div>
    
                <div class="panel-body">
                    {{--  @if (session('status'))
                        <div class="alert alert-success">
                        {{ session('status') }}
                        </div>
                    @endif    --}}
                <div>
                <a href="/home/client/tambah" class="btn btn-success">Tambah Client</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama Client</th>
                            <th>Tempat Lahir</th>
                            <th>Tangal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No KTP</th>
                            <th>NO HP</th>
                            <th>Email</th>
                            <th>Keterangan</th>
                            <th>Created By</th>
                            <th colspan="2">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($client as $c)
                        <tr>
                            <td>{{ $c->nama_client }}</td>
                            <td>{{ $c->tempat_lahir }}</td>
                            <td>{{ $c->tanggal_lahir }}</td>
                            <td>{{ $c->jenis_kelamin }}</td>
                            <td>{{ $c->alamat }}</td>
                            <td>{{ $c->no_ktp }}</td>
                            <td>{{ $c->no_hp }}</td>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->ket }}</td>
                            <td>{{ $c->crated_by }}</td>
                            <td>
                                <a href="/home/client/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="/home/client/hapus/{{ $c->id_client }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
