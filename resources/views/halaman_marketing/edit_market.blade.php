@extends('master')

@section('title', 'Edit | Marketing')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Marketing</div>

                <div class="panel-body">
                    {{--  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif    --}}

                    <a href="{{ route('index_marketing') }}" class="btn btn-warning">Kembali</a>
                    <br>
                    <br>
                    <div class="card mt-5">
                        <div class="card-body">
                        <form action="/home/marketing/update/{{ $marketing->id_marketing }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            {{--  isi form nama  --}}
                            <div class="form-group">
                                <label>Nama Marketing</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Marketing..." value="{{ $marketing->nama }}">
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
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $marketing->tanggal_lahir }}">
                                @if($errors->has('tanggal_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggal_lahir', '*Tanggal Lahir harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no ktp  --}}
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="number" name="no_ktp" class="form-control" placeholder="No KTP..." value="{{ $marketing->no_ktp }}">
                                @if($errors->has('no_ktp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_ktp', '*No KTP harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi alamat  --}}
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat...">{{ $marketing->alamat }}</textarea>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat', '*Alamat harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no hp  --}}
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No HP..." value="{{ $marketing->no_hp }}">
    
                                @if($errors->has('no_hp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_hp', '*No HP harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi email  --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email..." value="{{ $marketing->email }}">
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email', '*Email harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form keterangan  --}}
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="ket" class="form-control" placeholder="Keterangan...">{{ $marketing->ket }}</textarea>
                                @if($errors->has('ket'))
                                    <div class="text-danger">
                                        {{ $errors->first('ket', '*Keterangan harus terisi !!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form created BY  --}}
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="number" name="created_by" class="form-control" placeholder="Crated by..." value="{{ $marketing->created_by }}">
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
