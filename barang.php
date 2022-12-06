<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barang</title>
</head>
<body>
	<form method="post" action="barang_proses.php">
		<table align="center" cellspacing="10">
			<tr>
				<th colspan="2">FORM DATA BARANG</th>
			</tr>
			<tr>
				<td>ID Barang</td>
				<td><input type="text" name="idbrg" size="50"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama" size="50"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="hrg" size="50"></td>
			</tr>
			<tr>
				<td>stok</td>
				<td><input type="text" name="stok" size="50"></td>
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
			
			<tr align="center">
				<td colspan="2"> <input type="submit" name="submit" value="SIMPAN"></td>
				
			</tr>
		</table>
	</form>
</body>
</html>