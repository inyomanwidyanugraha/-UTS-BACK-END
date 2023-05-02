<?php

$nid = $_POST['nid'];
$nama_dosen = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi3.php";

$qry = "INSERT INTO dosen VALUES (
    '$nid', '$nama_dosen', '$gender', '$alamat', '$no_hp', '$email'
)";


$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}