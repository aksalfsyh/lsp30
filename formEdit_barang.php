<?php 
include "koneksi.php";

$id = $_GET['id'];

$q="select * from tbl_barang where id_barang='$id'";

$perintah = mysqli_query($conn, $q);

$baris = mysqli_fetch_array($perintah);
?>

	<form method="post" action="edit_barang.php">
		<table align="center" cellspacing="10">
			<tr>
				<th colspan="2">EDIT DATA BARANG</th>
			</tr>
			<tr>
				<td>ID Barang</td>
				<td><input type="text" name="idbrg" size="50"
                value="<?php echo $baris['id_barang']?>"readonly></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama" size="50"
                value="<?php echo $baris['nama_barang']?>"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="hrg" size="50"
                value="<?php echo $baris['harga']?>"></td>
			</tr>
			<tr>
				<td>stok</td>
				<td><input type="text" name="stok" size="50"
                value="<?php echo $baris['stok']?>"></td>
			</tr>
			<tr>
				<td>Supplier</td>
				<td>
	<select name="idsupplier">
	<?php
		include "koneksi.php";
		$perintah=mysqli_query($conn,"Select * From tb_supplier");

		while($data=mysqli_fetch_array($perintah)){
			echo "<option $select value=".$data['id_supplier'].">".$data['id_supplier']."-".$data['nama_supplier']."</option>";
		}
	?>
	</select>

				</td>
			</tr>
			
			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="EDIT"></td>
			</tr>
		</table>
	</form>
