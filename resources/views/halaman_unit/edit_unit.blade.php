@extends('master')

@section('title', 'Edit | Unit')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Edit Unit</strong></div>

                <div class="panel-body bg-success">
                    {{--  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif    --}}

                    <a href="{{ route('index_unit') }}" class="btn btn-warning">Kembali</a>
                    <div class="card-body">
                    <form action="/home/unit/proses/{{ $unit->id_unit }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        {{--  form isi kode unit  --}}
                        <div class="form-group">
                            <label>Kode Unit</label>
                            <input type="text" name="kode_unit" class="form-control" placeholder="Kode Unit..." value="{{ $unit->kode_unit }}">
                            @if($errors->has('kode_unit'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_unit', 'Kode unit harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi harga  --}}
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga..." value="{{ $unit->harga }}">
                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga', 'Harga harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi Luas  --}}
                        <div class="form-group">
                            <label>Luas</label>
                            <input type="text" name="luas" class="form-control" placeholder="Luas..." value="{{ $unit->luas }}">
                            @if($errors->has('luas'))
                                <div class="text-danger">
                                    {{ $errors->first('luas', 'Luas harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi luas tanah  --}}
                        <div class="form-group">
                            <label>Luas Tanah</label>
                            <input type="text" name="luas_tanah" class="form-control" placeholder="Luas..." value="{{ $unit->luas_tanah }}">
                            @if($errors->has('luas_tanah'))
                                <div class="text-danger">
                                    {{ $errors->first('luas_tanah', 'Luas Tanah harus terisi!!!')}}
                                </div>
                            @endif
                        </div>

                        {{--  form isi ket  --}}
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" class="form-control" placeholder="Keterangan...">{{ $unit->ket }}</textarea>
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
</div>
@endsection
