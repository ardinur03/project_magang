{{--  menghubungkan dengan konten view di master  --}}
@extends('master')

{{--  isi bagian judul  --}}
@section ('halaman_judul', 'Ini Unit')

{{--  isi bagian konten  --}}
@section('konten')
    <a href="/home">kembali ke home</a>
    <div class="container">
    <a href="/unit/tambah">+ unit</a>
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
                <a href="/unit/edit">edit</a>
                <a href="/unit/hapus">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection