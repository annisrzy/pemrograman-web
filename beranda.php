<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Perpustakaan</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header{
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
            position: relative;
        }

        h1{
            color: #333;
            margin: 0;
            padding: 20px;
        }

        main{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .section{
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

        p{
            color: #555;
        }

        footer{
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }

        header a{
            position: absolute;
            right: 50px;
            top: 20%;
        }

        .video-container{
            grid-column: span 2;
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        iframe{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Perpustakaan!</h1>
        <a href="pendaftaran.php"><h4>Logout</h4></a>
    </header>

    <main>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 'true'){
            echo '<p>Selamat! Anda berhasil terdaftar sebagai member perpustakaan.</p>';
        }
        ?>

        <section class="section">
            <a href="peminjaman.php" style="text-decoration: none"><h2>Peminjaman Buku</h2></a>
        </section>

        <section class="section video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Uq3GKLyzoxs?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </section>

        <section class="section">
            <a href="pengembalian.php" style="text-decoration: none"><h2>Pengembalian Buku</h2></a>
        </section>
    </main>

    <footer>
        <b>&copy; Perpus-An</b>
    </footer>

</body>
</html>
