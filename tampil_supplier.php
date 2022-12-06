<?php
include "koneksi.php";

$q = "select * From tb_supplier";
$perintah = mysqli_query($conn, $q);

echo "<h2>DAFTAR SUPPLIER</h2>";

echo "<table border='1'>
		<tr>
		   <th>ID Supplier</th>
		   <th>Nama Supplier</th>
		   <th>Alamat </th>
		   <th>No.Telp </th>
           <th>Hapus</th>
           <th>Edit</th>
		 </tr>";

  while($baris = mysqli_fetch_array($perintah))
  {
  	echo"<tr>
  			<td>".$baris['id_supplier']."</td>
  			<td>".$baris['nama_supplier']."</td>
  			<td>".$baris['alamat']."</td>
  			<td>".$baris['no_telp']."</td>
              <td><a href='hapus_supplier.php?id=".$baris['id_supplier']."'>HAPUS</a></td>
              <td><a href='formedit_supplier.php?id=".$baris['id_supplier']."'>EDIT</a></td>
  		</tr>";
  }
 echo "</table>";

?>