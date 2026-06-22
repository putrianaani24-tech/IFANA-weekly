<?php

  require 'fungsi.php';


  $id =$_GET["id"];

  $query = "SELECT * FROM mahasiswa WHERE id=$id";

  $mhs = tampildata($query)[0]; /// data isinya data spesifik id

  


    if(isset($_POST["submit"]))
    {
        /// ketika ada data yangn diedit ke db kirim notifnya
        if(ubahdata($_POST, $id)> 0)
        {
            echo "<script>
            alert('Data Berhasil Diubah!');
            window.location.href='mahasiswa.php';
            </script>";
        }
        else
            {
            echo "<script>
            alert('Data Gagal Diubah!');
            window.location.href='mahasiswa.php';
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

            <h2>Ubah Data</h2>
            
            <form action="" method="post">
                <table border="0" cellpadding="10">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama"  id = "nama" value="<?=$mhs[1]?>" required ></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="number" name="nim" id = "nim" value="<?=$mhs[2]?>" required ></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" id = "Prodi"value="<?=$mhs[3]?>" required ></td>
                    </tr>
                     <tr>
                         <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" id = "email"value="<?=$mhs[4]?>" ></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" id ="no_hp"value="<?=$mhs[5]?>" ></td>
                    </tr>

                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><input type="file" name="foto" id = "foto"value="<?=$mhs[6]?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit"name = "submit" value="Ubah Data" style="padding: 10px 20px;">
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