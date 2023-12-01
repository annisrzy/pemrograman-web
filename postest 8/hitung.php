<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data nilai mata kuliah dari formulir
    $nilai_mk1 = isset($_POST['nilai_mk1']) ? floatval($_POST['nilai_mk1']) : 0;
    
    // Mengambil nilai-nilai mata kuliah tambahan dari formulir
    $nilai_mk_tambahan = [];
    for ($i = 2; isset($_POST['nilai_mk' . $i]); $i++) {
        $nilai_mk_tambahan[] = floatval($_POST['nilai_mk' . $i]);
    }

    // Menggabungkan nilai-nilai mata kuliah
    $nilai_mk = array_merge([$nilai_mk1], $nilai_mk_tambahan);

    // Menghitung rata-rata
    $jumlah_mk = count($nilai_mk);
    $total_nilai = array_sum($nilai_mk);
    $IPK = $jumlah_mk > 0 ? ($total_nilai / ($jumlah_mk*100))*4 : 0;

    // Menentukan status kelulusan
    $status_kelulusan = $IPK > 2.0 ? "Anda Lulus!" : "Anda Tidak Lulus!";

    // Menampilkan hasil dengan dua digit desimal
    echo "<h2>Hasil:</h2>";
    echo "<p>Rata-rata Nilai: " . number_format($IPK, 2) . "</p>";
    echo "<p>Status Kelulusan: $status_kelulusan</p>";

    // Tombol Kembali
    echo '<br><a href="hitung.html">Kembali</a>';
}
?>
