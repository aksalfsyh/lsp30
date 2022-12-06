<?php
include "../koneksi.php";

//deklarasi variable
$id = $_POST['id'];
$nm = $_POST['nama'];
$jk = $_POST['jk'];
$tlp = $_POST['telp'];
$alt = $_POST['alamat'];

//perintah query sql

$q = "update tbl_pembeli set nama_pembeli='$nm', jk='$jk', no_telp='$tlp', alamat='$alt' where id_pembeli = $id";

$perintah = mysqli_query($conn,$q);


if($perintah){
    //echo "Data Sukses Tersimpan atau terkirim";

    echo "<script>
    window.alert('Data Sukses terUpdate');
    window.location='tampil_pembeli.php';
    </script>";
}else{
    echo "data gagal terupdate";
}
?>