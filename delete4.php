<?php

$nim = $_GET['nim'];

include "koneksi4.php";
$qry = "DELETE FROM alumni WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);


if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
}else{
    echo "Data gagal dihapus";
}