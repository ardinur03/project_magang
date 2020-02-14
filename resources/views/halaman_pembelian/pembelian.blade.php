@extends('master')

@section('title', 'Pembelian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body bg-success">
                    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif   --}}
                    <div class="pull-left"><b>Pembelian</b></div><br>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li class="active">Pembelian</li>
                        </ol>
                    </div>
                    <a href="/home" class="btn btn-warning">Kembali Ke Home</a>
                    <form action="{{ route('proses_simpan') }}" method="POST">
                        {{ csrf_field() }}

                        {{-- pilih unit --}}
                        <div class="form-group">
                            <label>Pilih Unit</label>
                            <select name="pilih_unit" class="form-control">
                                <option value="" >Isi Unit...</option>
                                @foreach ($pembelian as $p)
                                <option value="{{ $p->pilih_unit->kode_unit }}">{{ $p->pilih_unit->kode_unit }}</option>
                                @endforeach
                            </select>
                            {{--  validasi  --}}
                            @if ($errors->has('pilih_unit'))
                                <div class="text-danger">
                                    {{ $errors->first ('pilih_unit','Unit harus terisi!!!') }}
                                </div>
                            @endif
                        </div>
                        
                        {{-- pilih client --}}
                        <div class="form-group">
                            <label>Pilih Client</label>
                            <select name="pilih_client" class="form-control">
                                <option value="" selected>Isi Client</option>
                                @foreach ($pembelian as $p)
                                <option value="{{ $p->pilih_client->nama_client}}">{{ $p->pilih_client->nama_client }}</option>
                                @endforeach
                            </select>
                            {{--  validasi  --}}
                            @if ($errors->has('pilih_client'))
                                <div class="text-danger">
                                    {{ $errors->first ('pilih_client','Client harus terisi!!!') }}
                                </div>
                            @endif
                        </div>

                        {{-- pilih marketing --}}
                        <div class="form-group">
                            <label>Pilih Marketing</label>
                            <select name="pilih_marketing" class="form-control">
                                <option value="" >Isi Marketing</option>
                                @foreach ($pembelian as $p)
                                <option value="{{ $p->pilih_marketing->nama}}">{{ $p->pilih_marketing->nama }}</option>
                                @endforeach
                            </select>
                            {{--  validasi  --}}
                            @if ($errors->has('pilih_marketing'))
                                <div class="text-danger">
                                    {{ $errors->first ('pilih_marketing','Marketing harus terisi!!!') }}
                                </div>
                            @endif
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
@endsection
