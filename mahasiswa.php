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
                   
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Putriana Nur Ayu Rizkiani</td>
                        <td align="center">13182420104</td>
                        <td align="center">INFORMATIKA</td>
                        <td align="center">putrianaani24@gmail.com</td>
                        <td>087822068582</td>
                        <td align="center"><img src="assets/images/sabrina.jfif.jpg" width="100px"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Justin Bieber</td>
                        <td align="center">13182420245</td>
                        <td align="center">INFORMATIKA</td>
                        <td align="center">justinn25@gmail.com</td>
                        <td>0878330685885</td>
                        <td align="center"><img src="assets/images/justin.jfif.jpg" width="100px"></td>
                        <td>
                            <a href="ubahdata.php"><button>Edit<button></a> | <a href="ubahdata.php"><button>Hapus<button></a> 
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        &copy; 2026 Informatika
    </footer>
</body>
</html>