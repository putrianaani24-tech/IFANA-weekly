<?php

  require 'fungsi.php';

    if(isset($_POST["submit"]))
    {
        /// ketika ada data yangn dikirim ke db kirim notifnya
        if(tambahdata($_POST)> 0)
        {
            echo "<script>
            alert('Data Berhasil Ditambahkan!');
            window.loction.href='mahasiswa.php';
            </script>";
        }
        else
            {
            echo "<script>
            alert('Data Gagal Ditambahkan!');
            window.loction.href='mahasiswa.php';
            </script>";
            }
    }
?>

<html>
<head>
    <title>WEB INFORMATIKA C 2026</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="mahasiswa">
    <header>
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

            <h2>Input Data</h2>
            
            <form action="" method="post">
                <table border="0" cellpadding="10">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama"  id = "nama" required ></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="number" name="nim" id = "nim" required ></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" id = "Prodi" required ></td>
                    </tr>
                     <tr>
                         <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" id = "email" ></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" id ="no_hp" ></td>
                    </tr>

                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><input type="text" name="foto" id = "foto"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit"name = "submit" value="Kirim Data" style="padding: 10px 20px;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2026 Informatika
    </footer>
</body>
</html>