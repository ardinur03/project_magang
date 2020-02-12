@extends('master')

@section('title', 'Tambah | Marketing')
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
                    <div class="pull-left"><b>Tambah Marketing</b></div><br>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index_marketing') }}">Marketing</a></li>
                            <li class="active">Tambah Marketing</li>
                        </ol>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                        <form action="{{ route('proses_tambah') }}" method="POST">
                            {{ csrf_field() }}

                            {{--  isi form nama  --}}
                            <div class="form-group">
                                <label>Nama Marketing</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Marketing...">
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama', '*Nama Marketing harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>
                            
                            {{--  isi form jenis kelamin  --}}
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio"name="jenis_kelamin" value="L">L <br>
                                <input type="radio" name="jenis_kelamin" value="P">P
                                @if($errors->has('jenis_kelamin'))
                                    <div class="text-danger">
                                        {{ $errors->first('jenis_kelamin', '*Jenis Kelamin harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{-- form isi tanggal lahir  --}}
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                @if($errors->has('tanggal_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggal_lahir', '*Tanggal Lahir harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no ktp  --}}
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="number" name="no_ktp" class="form-control" placeholder="No KTP...">
                                @if($errors->has('no_ktp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_ktp', '*No KTP harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi alamat  --}}
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat..."></textarea>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat', '*Alamat harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no hp  --}}
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No HP...">
    
                                @if($errors->has('no_hp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_hp', '*No HP harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi email  --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email...">
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email', '*Email harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form keterangan  --}}
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="ket" class="form-control" placeholder="Keterangan..."></textarea>
                                @if($errors->has('ket'))
                                    <div class="text-danger">
                                        {{ $errors->first('ket', '*Keterangan harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form created BY  --}}
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="number" name="created_by" class="form-control" placeholder="Crated by...">
                                @if($errors->has('created_by'))
                                    <div class="text-danger">
                                        {{ $errors->first('created_by', '*Created By harus terisi !!!')}}
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
    </div>
</div>
@endsection
