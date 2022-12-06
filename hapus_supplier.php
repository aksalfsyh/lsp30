<?php
include "koneksi.php";

$id = $_GET['id'];

$q = "delete from tb_supplier where id_supplier = $id";

$perintah = mysqli_query($conn, $q);

if($perintah){
	//echo "Data Sukses terhapus";
	echo "<script> 
			window.alert('Data Sukses Terhapus');
			window.location='tampil_supplier.php';
		  </script>";
}else
{
	echo "Data Gagal dihapus";
}
?>