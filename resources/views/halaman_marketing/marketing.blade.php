@extends('master')

@section('title', 'Marketing')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Marketing</div>

                <div class="panel-body bg-success">
                    {{--  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif    --}}
                    <a href="/home/marketing/tambah_marketing" class="btn btn-success">Tambah Marketing</a>
                    <br>
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Nama Client</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No KTP</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Keterangan</th>
                            <th>Created By</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach ($marketing as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->jenis_kelamin }}</td>
                            <td>{{ $m->tanggal_lahir }}</td>
                            <td>{{ $m->no_ktp }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>{{ $m->no_hp }}</td>
                            <td>{{ $m->email }}</td>
                            <td>{{ $m->ket }}</td>
                            <td>{{ $m->created_by }}</td>
                            <td>
                                <a href="/home/marketing/edit/{{ $m->id_marketing }}" class="btn btn-warning">edit</a>
                            </td>
                            <td>
                                <a href="/home/marketing/hapus/{{ $m->id_marketing }}" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
