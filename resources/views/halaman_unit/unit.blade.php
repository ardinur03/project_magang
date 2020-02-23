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
                    <div class="panel-body">
                        {{--  @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif    --}}
                        <div class="pull-left"><b>Data Unit</b></div><hr>
                        <div class="panel-heading">
                            <ol class="breadcrumb">
                                <li class="active">Unit</li>
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

                        <a href="{{ route('tambah_unit') }}" class="btn btn-success">Tambah unit</a>
                        <br>
                        <br>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Unit</th>
                                    <th>Harga</th>
                                    <th>Luas</th>
                                    <th>Luas Tanah</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unit as $no => $u)
                                    <tr>
                                        <td class="text-center">{{ $no+1 }}</td>
                                        <td>{{ $u->kode_unit }}</td>
                                        <td>{{ $u->harga }}</td>
                                        <td>{{ $u->luas }}</td>
                                        <td>{{ $u->luas_tanah }}</td>
                                        <td>{{ $u->ket }}</td>
                                        <td>
                                            <a href="{{ route('edit_unit', $u->id_unit) }}" class="btn btn-warning">edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('hapus_unit', $u->id_unit) }}" class="btn btn-danger">hapus</a>
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