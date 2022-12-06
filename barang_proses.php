<?php
include "koneksi.php";

// deklarasi variabel
$idbrg  = $_POST['idbrg'];
$nm  	= $_POST['nama'];
$hrg 	= $_POST['hrg'];
$stok 	= $_POST['stok'];
$idsupplier = $_POST['idsupplier'];

// perintah Query Sql
$q = "INSERT into tbl_barang(id_barang, nama_barang, harga, stok,id_supplier ) values('$idbrg','$nm',$hrg,$stok,$idsupplier)";

$perintah = mysqli_query($conn, $q);

if($perintah){
	//echo "Data Sukses tersimpan atau terkirim";
	echo "<script> 
	window.alert('Data Sukses Tersimpan');
	window.location='tampil_barang.php';
	</script>";
}else
{
	echo "Data Gagal Tersimpan";
}

?>