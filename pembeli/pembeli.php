<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembeli</title>
</head>
<body>
    <form method="post" action="pembeli_proses.php">
        <table align="center" cellspacing="10">
            <tr>
                <th colspan="2">FORM DATA PEMBELI</th>
            </tr>

            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama" size="50"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk" id="">
                <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td><input type="text" name="telp" size="50"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>