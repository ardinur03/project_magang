<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah | Client</title>
</head>
<body>
    <div class="container">
        <h2>Penambahan Client</h2>
        <a href="/home/client">Kembali</a>
        <br>
        <br>
        <form action="/home/client/proses" method="POST">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nama Client</td>
                    <td>:</td>
                    <td><input type="text" name="nama_client" required> </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><select name="tempat_lahir">
                        <option>***Pilih***</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Solo</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" required> </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio"name="jenis_kelamin" required>L
                        <input type="radio" name="jenis_kelamin">P
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" required></textarea></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td>:</td>
                    <td><input type="number" name="no_ktp" required></td>
                </tr>
                <tr>
                    <td>NO HP</td>
                    <td>:</td>
                    <td><input type="number" name="no_hp" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><textarea name="ket" required></textarea></td>
                </tr>
                <tr>
                    <td>Created By</td>
                    <td>:</td>
                    <td><input type="number" min="0" max="50" name="created_by" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan Data"></td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>