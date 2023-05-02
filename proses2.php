<?php

$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi2.php";

$qry = "INSERT INTO pegawai VALUES (
    '$nip', '$nama_pegawai', '$jabatan', '$gender', '$alamat', '$no_hp', '$email'
)";


$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}