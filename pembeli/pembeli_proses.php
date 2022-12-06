<?php
include "../koneksi.php";

//deklarasi variable
$nm = $_POST['nama'];
$jk = $_POST['jk'];
$tlp = $_POST['telp'];
$alt = $_POST['alamat'];

//perintah query sql

$q = "INSERT into tbl_pembeli(nama_pembeli, jk,no_telp,alamat) values('$nm','$jk','$tlp','$alt')";

$perintah = mysqli_query($conn,$q);


if($perintah){
    //echo "Data Sukses Tersimpan atau terkirim";

    echo "<script>
    window.alert('Data Sukses Tersimpan');
    window.location='tampil_pembeli.php';
    </script>";
}else{
    echo "data gagal tersimpan";
}
?>