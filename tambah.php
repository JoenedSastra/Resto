<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h2>SI Sekolah | Tambah Data Siswa</h2>
    <br>
    <a href="index.php">Halaman Utama</a>
    <br/>
    <br/>
    <h3>Tambah Data Siawa</h3>
    <from method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input placeholder="Nama" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input placeholder="NIS" type="number" name="nis"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input placeholder="Alamat" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </from>
</body>
</html>