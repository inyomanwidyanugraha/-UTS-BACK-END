<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input data Pegawai</title>
    <style>
    /* Warna untuk background dan teks */
    body {
        background-color: #f2f2f2;
        color: #333;
    }
    
    /* Warna untuk form */
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* Warna untuk tombol submit */
    input[type="submit"] {
        background-color: #008CBA;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    input[type="submit"]:hover {
        background-color: #005F6B;
    }
    
    /* Warna untuk tabel */
    .tabel {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .tabel td, th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    
    .tabel th {
        background-color: #008CBA;
        color: #fff;
    }
    
    .tabel tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    /* Icon untuk tombol edit dan delete */
    .tabel button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .tabel button:hover {
        transform: scale(1.1);
    }
    
    .tabel button.edit {
        color: #008CBA;
    }
    
    .tabel button.delete {
        color: #FF4136;
    }
    #menu {
            background-color: #333;
            position: sticky;
            top: 0;
            overflow: hidden;
            z-index: 2;
        }

        #menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        #menu ul li {
            flex: 1;
        }

        #menu ul li a {
            text-decoration: none;
            display: block;
            padding: 15px;
            text-align: center;
            color: #fff;
            transition: 0.3s;
        }

        #menu ul li a:hover {
            background-color: #fff;
            color: #333;
        }
</style>

</head>

<body>
    <div id = "menu">    
    <ul>
        <li><a href="formulir.php">Formulir 1</a></li>
        <li><a href="formulir2.php">Formulir 2</a></li>
        <li><a href="formulir3.php">Formulir 3</a></li>
        <li><a href="formulir4.php">Formulir 4</a></li>
    </ul>
    </div>
    <form action="proses2.php" method="POST">
        <fieldset>
            <legend>Form input data Pegawai</legend>

            <table>
                <tr>
                    <td>NIP (Nomor Induk Pegawai)</td>
                    <td>:</td>
                    <td><input type="number" name="nip"></td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
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
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1"> Laki-laki
                        <input type="radio" name="gender" value="2"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <h2>Data Pegawai</h2>
    <table class="tabel">
        <tr>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Act</th>
        </tr>
        <?php 
            include "koneksi2.php";
            $qry = "SELECT * FROM pegawai";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){
        ?>
        <tr>
            <td><?= $data['nip'] ?></td>
            <td><?= $data['nama_pegawai'] ?></td>
            <td><?= $data['kode_jabatan'] ?></td>
            <td><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
               <a href="edit2.php?nip=<?= $data['nip'] ?>"><button>Edit</button></a>
               <a href="delete2.php?nip=<?= $data['nip'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>