<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit | Unit</title>
</head>
<body>
    <a href="/home/unit">Kembali</a>
    <div class="container">
    @foreach($unit as $u)
    <form action="/home/unit/update" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $u->id_unit }}">
        <table>
        <tr>
            <td>Kode Unit</td>
            <td>:</td>
            <td><input type="text" name="kode_unit" required="required" value="{{ $u->kode_unit }}"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga" required="required" value="{{ $u->harga }}"></td>
        </tr>
        <tr>
            <td>Luas</td>
            <td>:</td>
            <td><input type="text" name="luas" required="required" value="{{ $u->luas }}"></td>
        </tr>
        <tr>
            <td>Luas Tanah</td>
            <td>:</td>
            <td><input type="text" name="luas_tanah" required="required" value="{{ $u->luas_tanah }}"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea name="ket" required="required">{{ $u->ket }}</textarea></td>
        </tr>
        <tr>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
        </table>
    </form>
    @endforeach
    </div>
</body>
</html>