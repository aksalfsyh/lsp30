<?php
include "../koneksi.php";

$q = "select * From tbl_pembeli";
$perintah = mysqli_query($conn, $q);

echo "<h2>DAFTAR PEMBELI</h2>";

echo "<table border='1'>
		<tr>
		   <th>ID Pembeli</th>
		   <th>Nama</th>
		   <th>Jenis Kelamin</th>
		   <th>Telpon</th>
           <th>Alamat</th>
           <th>Hapus</th>
           <th>Edit</th>
		 </tr>";

  while($baris = mysqli_fetch_array($perintah))
  {
  	echo"<tr>
  			<td>".$baris['id_pembeli']."</td>
  			<td>".$baris['nama_pembeli']."</td>
  			<td>".$baris['jk']."</td>
  			<td>".$baris['no_telp']."</td>
              <td>".$baris['alamat']."</td>
              <td><a href='hapus_pembeli.php?id=".$baris['id_pembeli']."'>HAPUS</a></td>
              <td><a href='formedit_pembeli.php?id=".$baris['id_pembeli']."'>EDIT</a></td>
  		</tr>";
  }
 echo "</table>";

?>