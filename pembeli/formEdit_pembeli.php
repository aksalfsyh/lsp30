<?php 
include "../koneksi.php";

$id = $_GET['id'];

$q="select * from tbl_pembeli where id_pembeli=$id";

$perintah = mysqli_query($conn, $q);

$baris = mysqli_fetch_array($perintah);
?>
	<form method="post" action="edit_pembeli.php">
		<table align="center" cellspacing="10">
			<tr>
				<th colspan="2">EDIT DATA PEMBELI</th>
			</tr>
			<tr>
				<td>ID PEMBELI</td>
				<td><input type="text" name="id" size="50" 
					value="<?php echo $baris['id_pembeli']; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td><input type="text" name="nama" size="50" 
					value="<?php echo $baris['nama_pembeli']; ?>"></td>
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
				<td><input type="text" name="telp" size="50" value="<?php echo $baris['no_telp']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" size="50" value="<?php echo $baris['alamat']; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="EDIT"></td>
			</tr>
		</table>
	</form>