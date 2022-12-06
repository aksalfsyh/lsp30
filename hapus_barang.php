<?php
include "koneksi.php";

$id = $_GET['id'];
$q = "delete from tbl_barang where id_barang = '$id'";
$perintah = mysqli_query($conn,$q);

if($perintah){
	echo "<script> 
			window.alert('Data Sukses Terhapus');
			window.location='tampil_barang.php';
		  </script>";
}else
{
	echo "Data Gagal dihapus";
}
?>