@extends('master')

@section('title', 'Pembelian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Pembelian</div>

                <div class="panel-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif   --}}

                    <a href="/home" class="btn btn-warning">Kembali Ke Home</a>
                    <form action="/home/penjualan/proses_jual" method="POST">
                        {{ crsf_field() }}

                        {{-- pilih unit --}}
                        <div class="form-group">
                            <label>Pilih Unit</label>
                            <select name="pilih_unit" class="form-control">
                                <option>***Pilih Unit***</option>
                                <option value=""
                            </select>
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label></label>
                            <input type="" name="" class="form-control" placeholder="">
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label></label>
                            <input type="" name="" class="form-control" placeholder="">
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label></label>
                            <input type="" name="" class="form-control" placeholder="">
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label></label>
                            <input type="" name="" class="form-control" placeholder="">
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label></label>
                            <input type="" name="" class="form-control" placeholder="">
                            @if ($errors->has(''))
                                <div class="text-danger">
                                    {{ $errors->first ('','') }}
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
