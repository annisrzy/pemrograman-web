<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku - Perpustakaan</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header{
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            position: relative;
        }

        h1{
            color: #333;
        }

        main{
            margin-top: 20px;
        }

        form{
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: auto;
        }

        label{
            margin-bottom: 8px;
        }

        input, button{
            margin-bottom: 16px;
            padding: 8px;
        }

        header a{
            position: absolute;
            left: 50px;
        }

        footer{
            position: fixed;
            bottom: 0;
            width: 95%;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pengembalian Buku</h1>
        <a href="beranda.php"><h4>Kembali</h4></a>
    </header>

    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama_pengembali">Nama Pengembali:</label>
            <input type="text" id="nama_pengembali" name="nama_pengembali" required>

            <label for="judul_buku">Judul Buku:</label>
            <input type="text" id="judul_buku" name="judul_buku" required>

            <label for="tanggal_pengembalian">Tanggal Pengembalian Buku:</label>
            <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" required>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $nama_pengembali = $_POST["nama_pengembali"];
            $judul_buku = $_POST["judul_buku"];
            $tanggal_pengembalian = $_POST["tanggal_pengembalian"];

            $file_peminjaman = 'peminjaman.txt';
            $data_peminjaman = file($file_peminjaman, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            $peminjaman_terbaru = end($data_peminjaman);
            list($tipe_peminjaman, $nama_peminjam, $judul_peminjaman, $tanggal_peminjaman) = explode(", ", $peminjaman_terbaru);

            if (
                $tipe_peminjaman == "Peminjaman" &&
                $nama_pengembali == $nama_peminjam &&
                $judul_buku == $judul_peminjaman &&
                $tanggal_pengembalian > $tanggal_peminjaman
            ) {
                $file_pengembalian = 'pengembalian.txt';
                $data_pengembalian = "Pengembalian, $nama_pengembali, $judul_buku, $tanggal_pengembalian\n";
                file_put_contents($file_pengembalian, $data_pengembalian, FILE_APPEND | LOCK_EX);

                echo "<p>Data pengembalian berhasil dimasukkan.</p>";
            } else {
                echo "<p>Error: Data pengembalian tidak sesuai.</p>";
            }
        }
        ?>
    </main>

    <footer>
        <b>&copy; Perpus-An</b>
    </footer>

</body>
</html>
