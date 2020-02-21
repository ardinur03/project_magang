@extends('master')

@section('title', 'List Pembelian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="pull-left"><b>List Pembelian</b></div><br><br>

                {{-- breadcrumb awal di gunakan jika ada fitur tambahan --}}
                {{-- <div class="panel-heading">
                    <ol class="breadcrumb">
                       <li class="active">Pembelian</li>
                    </ol>
                </div> --}} 
                {{-- breadcrumb akhir --}}

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>kode Unit</th>
                                <th>Nama Client</th>
                                <th>Nama Marketing</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembelian as $no => $p)
                                <tr>
                                    <td class="text-center"> {{ $no+1 }} </td>
                                    <td>{{ $p->pilih_unit->kode_unit }}</td>
                                    <td>{{$p->pilih_client->nama_client}}</td>
                                    <td>{{$p->pilih_marketing->nama}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning">edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger">hapus</a>
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