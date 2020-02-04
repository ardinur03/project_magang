{{--  menghubungkan dengan konten view di master  --}}
@extends('master')

{{--  isi bagian judul  --}}
@section ('halaman_judul', 'Ini Unit')

{{--  isi bagian konten  --}}
@section('konten')
    Unit
    <a href="/home">kembali ke home</a>
@endsection