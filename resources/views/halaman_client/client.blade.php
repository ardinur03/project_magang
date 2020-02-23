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
                <div class="panel-body  table-responsive">
                    <div class="pull-left"><b>Data Client</b></div><hr>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li class="active">Client</li>
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

                    <a href="{{ route('client_tambah') }}" class="btn btn-success">Tambah Client</a>
                    <br>
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
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
                            @foreach($client as $no => $c)
                                <tr>
                                    <td class="text-center">{{ $no+1 }}</td>
                                    <td>{{ $c->nama_client }}</td>
                                    <td>{{ $c->tempat_lahir }}</td>
                                    <td>{{ $c->tanggal_lahir }}</td>
                                    <td>{{ $c->jenis_kelamin }}</td>
                                    <td>{{ $c->alamat }}</td>
                                    <td>{{ $c->no_ktp }}</td>
                                    <td>{{ $c->no_hp }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->ket }}</td>
                                    <td class="text-center">{{ $c->user_create->name }}</td>
                                    <td>
                                        <a href="{{ route('edit_client', $c->id_client) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('hapus_client',$c->id_client) }}" class="btn btn-danger">Hapus</a>
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
