{{--  menghubungkan dengan konten view di master  --}}
@extends('master')

{{--  isi bagian judul  --}}
@section ('halaman_judul', 'Ini Unit')

{{--  isi bagian konten  --}}
@section('konten')
    <a href="/home">kembali ke home</a>
    <div class="container">
    <a href="/home/unit/tambah_unit">+ unit</a>
    <br>
    <table border="1">
        <tr>
            <td>Kode Unit</td>
            <td>Harga</td>
            <td>Luas</td>
            <td>Luas Tanah</td>
            <td>Keterangan</td>
            <td>Opsi</td>
        </tr>
        @foreach ($unit as $u)
        <tr>
            <td>{{ $u->kode_unit }}</td>
            <td>{{ $u->harga }}</td>
            <td>{{ $u->luas }}</td>
            <td>{{ $u->luas_tanah }}</td>
            <td>{{ $u->ket }}</td>
            <td>
                <a href="/home/unit/edit/{{ $u->id_unit }}">edit</a>
                <a href="/home/unit/hapus/{{ $u->id_unit }}">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection