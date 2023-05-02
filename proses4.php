<?php

$nim = $_POST['nim'];
$nama_alumni = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi4.php";

$qry = "INSERT INTO alumni VALUES (
    '$nim', '$nama_alumni', '$jurusan', '$gender', '$alamat', '$no_hp', '$email'
)";


$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}
?>

