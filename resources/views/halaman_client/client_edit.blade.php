@extends('master')

@section('title', 'Edit | Client')
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
                    <div class="pull-left"><b>Edit Client</b></div><br>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index_client') }}">Client</a></li>
                            <li class="active">Edit Client</li>
                        </ol>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                        <form action="/home/client/update/{{ $client->id_client}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            
                            {{--  form isi nama client  --}}
                            <div class="form-group">
                                <label>Nama Client</label>
                            <input type="text" name="nama_client" class="form-control" placeholder="Nama client..." value="{{ $client->nama_client }}">
                                @if($errors->has('nama_client'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama_client')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi tempat lahir  --}}
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <select name="tempat_lahir" class="form-control">
                                    <option value="{{ $client->nama_client }}">{{ $client->tempat_lahir }}</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Solo">Solo</option>
                                </select>
                                @if($errors->has('tempat_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tempat_lahir')}}
                                    </div>
                                @endif
                            </div>
                            {{-- form isi tanggal lahir  --}}
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $client->tanggal_lahir  }}">
                                @if($errors->has('tanggal_lahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggal_lahir')}}
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
                                        {{ $errors->first('jenis_kelamin')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi alamat  --}}
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat...">{{ $client->alamat  }}</textarea>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no ktp  --}}
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="number" name="no_ktp" class="form-control" placeholder="No KTP..." value="{{ $client->no_ktp  }}">
                                @if($errors->has('no_ktp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_ktp')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi no hp  --}}
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No HP..." value="{{ $client->no_hp }}">
    
                                @if($errors->has('no_hp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_hp')}}
                                    </div>
                                @endif
                            </div>

                            {{--  form isi email  --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email..." value="{{ $client->email  }}">
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form keterangan  --}}
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="ket" class="form-control" placeholder="Keterangan...">{{ $client->ket  }}</textarea>
                                @if($errors->has('ket'))
                                    <div class="text-danger">
                                        {{ $errors->first('ket')}}
                                    </div>
                                @endif
                            </div>

                            {{--  isi form created BY  --}}
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="number" name="crated_by" class="form-control" placeholder="Crated by..." value="{{ $client->crated_by  }}">
                                @if($errors->has('crated_by'))
                                    <div class="text-danger">
                                        {{ $errors->first('crated_by')}}
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
