@extends('master')

@section('title', 'Tambah | Client')
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
                    <div class="pull-left"><b>Tambah Client</b></div><br>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index_client') }}">Client</a></li>
                            <li class="active">Tambah Client</li>
                        </ol>
                    </div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        Mohon isi form  sebelum men-submit!!!
                    </div>
                    @endif
                    <div class="card mt-5">
                        <div class="card-body">
                        <form action="{{ route('tambah_client') }}" method="POST">
                            {{ csrf_field() }}

                            {{--  form isi nama client  --}}
                            <div class="form-group">
                                <label>Nama Client</label>
                                <input type="text" name="nama_client" class="form-control" placeholder="Nama client...">
                                @if($errors->has('nama_client'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama_client', '*Client harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi tempat lahir  --}}
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <select name="tempat_lahir" class="form-control" placeholder="Tempat Lahir...">
                                    <option  value="" selected>Tempat Lahir...</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Solo">Solo</option>
                                </select>
                                @if($errors->has('tempat_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tempat_lahir', '*Tempat Lahir harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>
                            {{-- form isi tanggal lahir  --}}
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                @if($errors->has('tanggal_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggal_lahir', '*Tanggal Lahir harus terisi')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi jenis kelamin  --}}
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio"name="jenis_kelamin" value="L">L <br>
                                <input type="radio" name="jenis_kelamin" value="P">P
                                @if($errors->has('jenis_kelamin'))
                                    <div class="text-danger">
                                        {{ $errors->first('jenis_kelamin', '*Jenis Kalamin harus terisi')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi alamat  --}}
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat..."></textarea>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat', '*Alamat harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no ktp  --}}
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="number" name="no_ktp" class="form-control" placeholder="No KTP...">
                                @if($errors->has('no_ktp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_ktp', '*No KTP harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no hp  --}}
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No HP...">
    
                                @if($errors->has('no_hp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_hp', '*NO HP harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi email  --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email...">
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email', '*Email harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form keterangan  --}}
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="ket" class="form-control" placeholder="Keterangan..."></textarea>
                                @if($errors->has('ket'))
                                    <div class="text-danger">
                                        {{ $errors->first('ket', '*keterangan harus terisi!!!')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form created BY  --}}
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="number" name="crated_by" class="form-control" placeholder="Crated by...">
                                @if($errors->has('crated_by'))
                                    <div class="text-danger">
                                        {{ $errors->first('crated_by', '*Created by harus terisi!!!')}}
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
