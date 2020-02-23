@extends('master')
@section('title', 'Edit Pembelian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><b>Edit Pembelian</b></div><br><br>
                    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif   --}}
                    {{-- breadcrumb awal  --}}
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                        <li><a href="{{ route('index_list_pembelian') }}">Pembelian</a></li>
                        <li class="active">Edit Unit</li>
                        </ol>
                    </div> 
                    {{-- breadcrumb akhir --}}
                    
                    <div class="card-body">
                        <form action="{{ route('proses_edit_pembelian', $pembelian->id_pembelian) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- form edit kode unit --}}
                            <div class="form-group">
                                <label>Kode Unit</label>
                                <select name="pilih_unit" class="form-control">
                                    <option value="">{{ $pembelian->pilih_unit->kode_unit }}</option>
                                    @foreach ($pembeli as $p)
                                        <option value="{{ $p->pilih_unit->id_unit }}">{{ $p->pilih_unit->kode_unit }}</option>
                                    @endforeach
                                </select> 
                            </div>

                            {{-- form edit client --}}
                            <div class="form-group">
                                <label>Nama Client</label>
                                <select name="pilih_client" class="form-control">
                                    <option value="">{{ $pembelian->pilih_client->nama_client }}</option>
                                    @foreach ($pembeli as $p)
                                        <option value="{{ $p->pilih_client->id_client }}">{{ $p->pilih_client->nama_client }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- form edit marketing --}}
                            <div class="form-group">
                                <label>Nama Marketing</label>
                                <select name="pilih_marketing" class="form-control">
                                    <option value="">{{ $pembelian->pilih_marketing->nama }}</option>
                                    @foreach ($pembeli as $p)
                                        <option value="{{ $p->pilih_marketing->id_marketing }}">{{ $p->pilih_marketing->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection