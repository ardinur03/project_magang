@extends('master')

@section('title', 'Marketing')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><b>Data Marketing</b></div><hr>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li class="active">Marketing</li>
                        </ol>
                    </div>

                    {{-- alert info awal --}}
                    @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    {{-- alert infp akhir --}}

                    {{-- alert warning awal --}}
                        @if ($message = Session::get('warning'))
                            <div class="alert alert-warning alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    {{-- alert warning akhir --}}

                    {{-- alert sukses awal --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    {{-- alert sukses akhir --}}

                    <a href="{{ route('tambah_marketing') }}" class="btn btn-success">Tambah Marketing</a>
                    <br>
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Marketing</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No KTP</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th>Created By</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($marketing as $no => $m)
                                    <tr>
                                        <td class="text-center">{{ $no+1 }}</td>
                                        <td>{{ $m->nama }}</td>
                                        <td>{{ $m->tanggal_lahir }}</td>
                                        <td>{{ $m->jenis_kelamin }}</td>
                                        <td>{{ $m->alamat }}</td>
                                        <td>{{ $m->no_ktp }}</td>
                                        <td>{{ $m->no_hp }}</td>
                                        <td>{{ $m->email }}</td>
                                        <td>{{ $m->ket }}</td>
                                        <td class="text-center">{{ $m->user_create->name }}</td>
                                        <td>
                                            <a href="{{ route('edit_marketing', $m->id_marketing) }}" class="btn btn-warning">edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('hapus_marketing', $m->id_marketing) }}" class="btn btn-danger">hapus</a>
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
@endsection
