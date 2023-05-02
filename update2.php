<?php

$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi2.php";

$qry = "UPDATE pegawai SET 
        nama_pegawai = '$nama_pegawai',
        kode_jabatan = '$jabatan',
        gender = '$gender',
        alamat = '$alamat',
        no_hp = '$no_hp',
        email = '$email'
        WHERE nip = '$nip'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}

?>
