<?php

 require 'fungsi.php';

  $qmahasiswa = "SELECT * FROM mahasiswa"; /// karena query ke tabel mahsiswa

  $mahasiswas = tampildata($qmahasiswa);/// menghasilkan data mahasiswa dalam wadah

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa WEB INFORMATIKA 2026</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="mahasiswa"> <header>
        <h1>WEB INFORMATIKA ANA 2026</h1>
    </header>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="mahasiswa.php">Data Mahasiswa</a>
    </nav>

    <div class="container">
        <div class="card">
            <h3>Data Mahasiswa</h3>
            
            <a href="inputdata.php">
                <button style="margin-bottom: 20px; cursor: pointer;">Tambah Data</button>
            </a>

            <table class="data">
                <thead>
                    <tr>
                        <th >No</th>
                        <th >Nama</th>
                        <th >NIM</th>
                        <th >Jurusan</th>
                        <th >Email</th>
                        <th >No.HP</th>
                        <th >Foto</th>
                        <th>Aksi</th>
                    </tr>
                   <?php
                   $no = 1;
                     foreach($mahasiswas as $mhs)
                     {
                    ?>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"><?= $mhs[0] ?></td>
                        <td><?php echo $mhs [1]?></td>
                        <td align="center"><?= $mhs[2] ?></td>
                        <td align="center"><?= $mhs[3] ?></td>
                        <td align="center"><?= $mhs[4] ?></td>
                        <td><?= $mhs[5] ?></td>
                        <td><img src="assets/images/<?= $mhs[5] ?>" width="50px" height="50px"/></td>
                    <td>
                    <a href="ubahdata.php" stlye=""><button>Edit</button></a> 
                    <a href="hapusdata.php" ><button>Hapus</button></a>
                    </td>
                    </tr>
                </tbody>
                <?php
                 }
                ?>
    </table>
    <footer>
        &copy; 2026 Informatika
    </footer>
</body>
</html>