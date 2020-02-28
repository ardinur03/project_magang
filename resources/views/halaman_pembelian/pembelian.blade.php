@extends('master')

@section('title', 'Pembelian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                {{--
                    @if ($message = Session::get('error'))
                      <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                      </div>
                    @endif
                     --}}
                    
                    <div class="pull-left"><b>Pembelian</b></div><hr>
                    {{-- <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li class="active">Pembelian</li>
                        </ol>
                    </div> --}}

                    {{-- alert validasi kosong awal --}}
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        Mohon isi form sebelum men-submit!!!
                    </div>
                    @endif
                    {{-- alert validasi kosong akhir --}}

                    {{-- alert sukses awal --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="{{ route('index_list_pembelian') }}" class="btn btn-warning">list Pembelian</a>
                    </div>
                    @endif
                    {{-- alert sukses awal --}}

                    
                    
                    <form action="{{ route('proses_simpan') }}" method="POST">
                        {{ csrf_field() }}

                        {{-- pilih unit --}}
                        <div class="form-group">
                            <label>Pilih Unit</label>
                            <select name="pilih_unit" class="form-control">
                                <option value="" >Isi Unit...</option>
                                @foreach ($unit as $u)
                                <option value="{{ $u->id_unit }}">{{ $u->kode_unit }}</option>
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
                                @foreach ($client as $c)
                                <option value="{{ $c->id_client}}">{{ $c->nama_client }}</option>
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
                                @foreach ($marketing as $m)
                                <option value="{{ $m->id_marketing}}">{{ $m->nama }}</option>
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
