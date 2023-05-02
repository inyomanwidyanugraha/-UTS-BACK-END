<?php

$nip = $_GET['nip'];

include "koneksi2.php";
$qry = "DELETE FROM pegawai WHERE nip = '$nip'";
$exec = mysqli_query($con, $qry);


if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
}else{
    echo "Data gagal dihapus";
}