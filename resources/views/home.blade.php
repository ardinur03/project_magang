@extends('master')

@section('title', 'Home JB-Store')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                      @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif  

                    Kamu berhasil login
                    <br>
                    <br>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
