<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        <h1>Peminjaman Buku</h1>
        <a href="beranda.php"><h4>Kembali</h4></a>
    </header>

    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama_peminjam">Nama Peminjam:</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam" required>

            <label for="judul_buku">Judul Buku Pinjaman:</label>
            <input type="text" id="judul_buku" name="judul_buku" required>

            <label for="tanggal_peminjaman">Tanggal Peminjaman Buku:</label>
            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" required>

            <button type="submit" name="submit_peminjaman">Peminjaman</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $nama_peminjam = $_POST["nama_peminjam"];
            $judul_buku = $_POST["judul_buku"];
            $tanggal_peminjaman = $_POST["tanggal_peminjaman"];

            
            $operation_type = isset($_POST["submit_peminjaman"]) ? "Peminjaman" : "Pengembalian";

            $file = 'peminjaman.txt';
            $data = "$operation_type, $nama_peminjam, $judul_buku, $tanggal_peminjaman\n";
            file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

            echo "<h2>Detail $operation_type</h2>";
            echo "<p>Nama Peminjam: $nama_peminjam</p>";
            echo "<p>Judul Buku Pinjaman: $judul_buku</p>";
            echo "<p>Tanggal $operation_type: " . date('d/m/Y', strtotime($tanggal_peminjaman)) . "</p>";
            echo "<p><b>== Terima kasih telah melakukan peminjaman buku :) ==</b></p>";
        } else {
            echo "<p>Belum ada data peminjaman.</p>";
        }
        ?>
    </main>

    <footer>
        <b>&copy; Perpus-An</b>
    </footer>

</body>
</html>
