<?php
$nip = $_GET['nip'];
include "koneksi2.php";

$qry = "SELECT * FROM pegawai WHERE nip = '$nip'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<form action="update2.php" method="POST">
        <fieldset>
            <legend>Form edit data Pegawai</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIP (Nomor induk Pegawai)</td>
                    <td>:</td>
                    <td><input type="number" name="nip" value="<?= $data['nip'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama_pegawai'] ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php
                            if($data['gender'] == 1) {
                        ?>
                            <input type="radio" name="gender" value="1" checked> laki-laki
                            <input type="radio" name="gender" value="2"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="1"> laki-laki
                            <input type="radio" name="gender" value="2" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><select name="jabatan">
                            <option value="001">Direktur</option>
                            <option value="002">Manajer</option>
                            <option value="003">Supervisor</option>
                            <option value="004">Staff</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
   