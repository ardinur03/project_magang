@extends('master')

@section('title', 'Tambah | Unit')
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
                    @endif  --}}
                    <div class="pull-left"><b>Tambah Unit</b></div><hr>
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index_unit') }}">Unit</a></li>
                            <li class="active">Tambah Unit</li>
                        </ol>
                    </div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        Mohon isi form sebelum men-submit!!!
                    </div>
                    @endif
                    <form action="{{ route('proses_tambah_unit') }}" method="POST">
                        {{ csrf_field() }}

                        {{--  form isi kode unit  --}}
                        <div class="form-group">
                            <label>Kode Unit</label>
                            <input type="text" name="kode_unit" class="form-control" placeholder="Kode Unit...">
                            @if($errors->has('kode_unit'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_unit', 'Kode unit harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi harga  --}}
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga...">
                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga', 'Harga harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi Luas  --}}
                        <div class="form-group">
                            <label>Luas</label>
                            <input type="text" name="luas" class="form-control" placeholder="Luas...">
                            @if($errors->has('luas'))
                                <div class="text-danger">
                                    {{ $errors->first('luas', 'Luas harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi luas tanah  --}}
                        <div class="form-group">
                            <label>Luas Tanah</label>
                            <input type="text" name="luas_tanah" class="form-control" placeholder="Luas...">
                            @if($errors->has('luas_tanah'))
                                <div class="text-danger">
                                    {{ $errors->first('luas_tanah', 'Luas Tanah harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi ket  --}}
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" class="form-control" placeholder="Keterangan..."></textarea>
                            @if($errors->has('ket'))
                                <div class="text-danger">
                                    {{ $errors->first('ket', 'Keterangan harus terisi!!!')}}
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