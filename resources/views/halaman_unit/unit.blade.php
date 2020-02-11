{{--  menghubungkan dengan konten view di master  --}}
@extends('master')

{{--  isi bagian title halaman unit --}}
@section ('title', 'Unit')


{{--  isi bagian konten  --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    
                    <div class="panel-body bg-success">
                        {{--  @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif    --}}
                        <div class="panel-heading">
                            <ol class="breadcrumb">
                                <li class="active">Unit</li>
                            </ol>
                        </div>
                        <a href="{{ route('tambah_unit') }}" class="btn btn-success">Tambah unit</a>
                        <br>
                        <br>
                        <table  class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Kode Unit</th>
                                <th>Harga</th>
                                <th>Luas</th>
                                <th>Luas Tanah</th>
                                <th>Keterangan</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @foreach ($unit as $u)
                            <tr>
                                <td>{{ $u->kode_unit }}</td>
                                <td>{{ $u->harga }}</td>
                                <td>{{ $u->luas }}</td>
                                <td>{{ $u->luas_tanah }}</td>
                                <td>{{ $u->ket }}</td>
                                <td>
                                    <a href="/home/unit/edit/{{ $u->id_unit }}" class="btn btn-warning">edit</a>
                                </td>
                                <td>
                                    <a href="/home/unit/hapus/{{ $u->id_unit }}" class="btn btn-danger">hapus</a>
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