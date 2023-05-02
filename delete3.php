<?php

$nid = $_GET['nid'];

include "koneksi3.php";
$qry = "DELETE FROM dosen WHERE nid = '$nid'";
$exec = mysqli_query($con, $qry);


if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
}else{
    echo "Data gagal dihapus";
}