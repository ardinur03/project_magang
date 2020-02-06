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
                    <div class="panel-heading">Unit</div>
                    <div class="panel-body">
                        {{--  @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif    --}}
                        <a href="/home/unit/tambah_unit" class="btn btn-success">Tambah unit</a>
                        <br>
                        <br>
                        <table  class="table table-bordered table-hover table-striped">
                            <tr>
                                <td>Kode Unit</td>
                                <td>Harga</td>
                                <td>Luas</td>
                                <td>Luas Tanah</td>
                                <td>Keterangan</td>
                                <td colspan="2">Opsi</td>
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