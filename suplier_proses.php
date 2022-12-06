<?php
include "koneksi.php";

//deklarasi variable
$nm = $_POST['nama'];
$tlp = $_POST['telp'];
$alt = $_POST['alamat'];

//perintah query sql

$q = "INSERT into tb_supplier(nama_supplier,no_telp,alamat) values('$nm','$tlp','$alt')";

$perintah = mysqli_query($conn,$q);


if($perintah){
    //echo "Data Sukses Tersimpan atau terkirim";

    echo "<script>
    window.alert('Data Sukses Tersimpan');
    window.location='tampil_supplier.php';
    </script>";
}else{
    echo "data gagal tersimpan";
}
?>