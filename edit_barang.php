<?php
include "koneksi.php";

$idbrg  = $_POST['idbrg'];
$nm  	= $_POST['nama'];
$hrg 	= $_POST['hrg'];
$stok 	= $_POST['stok'];
$idsupplier = $_POST['idsupplier'];


$q = "update tbl_barang set id_barang='$idbrg', nama_barang='$nm', harga='$hrg', stok='$stok', id_supplier='$idsupplier' where id_barang = '$idbrg'";
echo $q;
$perintah = mysqli_query($conn, $q);

if($perintah){
	//echo "Data Sukses terhapus";
	echo "<script> 
			window.alert('Data Sukses Terupdate');
			window.location='tampil_barang.php';
		  </script>";
}else
{
	echo " Data Gagal diupdate";
}
?>