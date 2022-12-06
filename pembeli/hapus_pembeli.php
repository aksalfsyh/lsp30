<?php
include "../koneksi.php";

$id = $_GET['id'];
$q = "delete from tbl_pembeli where id_pembeli = '$id'";
$perintah = mysqli_query($conn,$q);

if($perintah){
	echo "<script> 
			window.alert('Data Sukses Terhapus');
			window.location='tampil_pembeli.php';
		  </script>";
}else
{
	echo "Data Gagal dihapus";
}
?>