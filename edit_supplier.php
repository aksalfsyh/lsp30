<?php
include "koneksi.php";

$id 	= $_POST['id'];
$nm 	= $_POST['nama'];
$alamat = $_POST['alamat'];
$telp 	= $_POST['telp'];


$q = "update tb_supplier set nama_supplier='$nm', no_telp='$telp', alamat='$alamat' where id_supplier = $id";

$perintah = mysqli_query($conn, $q);

if($perintah){
	//echo "Data Sukses terhapus";
	echo "<script> 
			window.alert('Data Sukses Terupdate');
			window.location='tampil_supplier.php';
		  </script>";
}else
{
	echo " Data Gagal dihapus";
}
?>