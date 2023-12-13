<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama_peminjam = $_POST["nama_peminjam"];
    $judul_buku = $_POST["judul_buku"];

    $file = 'peminjaman.txt';
    $data = "$nama_peminjam, $judul_buku\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    header("Location: peminjaman.php?success=true");
    exit();
} else {
    
    header("Location: peminjaman.php");
    exit();
}
?>
