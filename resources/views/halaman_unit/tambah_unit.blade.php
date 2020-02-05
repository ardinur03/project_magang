<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah | Unit</title>
</head>
<body>
    <h2>Tambah Unit</h2>
    <br>
    <a href="/home/unit">Kembali</a>
    <div class="container">
    <form action="/home/unit/store" method="POST">
        {{ csrf_field() }}
        <table>
        <tr>
            <td>Kode Unit</td>
            <td>:</td>
            <td><input type="text" name="kode_unit" required="required"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga" required="required"></td>
        </tr>
        <tr>
            <td>Luas</td>
            <td>:</td>
            <td><input type="text" name="luas" required="required"></td>
        </tr>
        <tr>
            <td>Luas Tanah</td>
            <td>:</td>
            <td><input type="text" name="luas_tanah" required="required"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea name="ket" required="required"></textarea></td>
        </tr>
        <tr>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
        </table>
    </form>
    </div>
</body>
</html>