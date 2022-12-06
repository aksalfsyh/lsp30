<?php
include "koneksi.php";

$q = "select * From tbl_barang";
$perintah = mysqli_query($conn, $q);

echo "<h2>DAFTAR BARANG</h2>";
echo "<h3><a href='barang.php'>Input Barang</a></h3>";

echo "<table border='1'>
		<tr>
		   <th>ID Barang</th>
		   <th>Nama Barang</th>
		   <th>Harga</th>
		   <th>stok</th>
           <th>supplier</th>
           <th>Hapus</th>
           <th>Edit</th>
		 </tr>";

  while($baris = mysqli_fetch_array($perintah))
  {
  	echo"<tr>
  			<td>".$baris['id_barang']."</td>
  			<td>".$baris['nama_barang']."</td>
  			<td>".$baris['harga']."</td>
  			<td>".$baris['stok']."</td>
              <td>".$baris['id_supplier']."</td>
              <td><a href='hapus_barang.php?id=".$baris['id_barang']."'>HAPUS</a></td>
              <td><a href='formedit_barang.php?id=".$baris['id_barang']."'>EDIT</a></td>
  		</tr>";
  }
 echo "</table>";

?>