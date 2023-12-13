<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nama_pengembali = $_POST["nama_pengembali"];
    $judul_buku = $_POST["judul_buku"];

    $file = 'pengembalian.txt';
    $data = "$nama_pengembali, $judul_buku\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    header("Location: pengembalian.php?success=true");
    exit();
} else {
   
    header("Location: pengembalian.php");
    exit();
}
?>