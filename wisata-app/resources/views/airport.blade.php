<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport</title>
    <link rel="stylesheet" href="{{ asset('/css/airport1.css') }}">
</head>

<body>
    <div class="kontainer">
        <header>
            <h1>Jakarta <span class="bandara">Airport</span></h1>
            <ul>
                <li>
                    <b><a href="/"> Home</a>
                        <span class="sr-only"></span>
                </li>
                <li>
                    <a href="https://www.instagram.com/annisrzy/" target="_blank"> Contact</a>
                </li>
                <li>
                    <a href=""> Help</a></b>
                </li>
            </ul>
        </header>
        <nav>
            <div class="img">
                <img src="img/airport.jpg" alt="bandarudara">
            </div>
        </nav>
        <fill>
            <h2>Bandar Udara.</h2>
            <p style="line-height: 30px;">Fasilitas di daratan atau perairan yang digunakan untuk kegiatan lepas
                landas, mendarat, serta pergerakan pesawat udara.
                Fasilitasnya bervariasi, mulai dari landasan pacu hingga bangunan terminal dan hanggar.
                Menurut Annex 14 dari Organisasi Penerbangan Sipil Internasional, bandar udara mencakup area untuk
                kedatangan, keberangkatan, dan pergerakan pesawat, dengan berbagai fasilitas penerbangan.
                PT Angkasa Pura mendefinisikan bandar udara sebagai lapangan udara yang menyediakan fasilitas
                angkutan udara untuk masyarakat.
                Secara yuridis, bandar udara adalah kawasan dengan fasilitas keselamatan dan keamanan penerbangan
                yang digunakan untuk keperluan penerbangan, penumpang, dan muatan barang serta sebagai titik
                perpindahan dalam sistem transportasi.</p>
        </fill>
        <content>
            <h3>Bandara Soekarno Hatta (CGK)</h3>
            <p>Bandar Udara Soekarno Hatta merupakan bandar udara yang melayani penerbangan domestik maupun
                internasional. Di bandara ini terdapat 3 bangunan terminal utama, yaitu Terminal 1, Terminal 2, dan
                Terminal 3.</p>
            <p>Lokasi: Jakarta International Soekarno-Hatta Airport Building 601, PO.BOX 1245 BUSH, Jakarta, 19101, Kab.
                Tangerang, Banten</p>
            <br>
            <h3>Bandara Halim Perdanakusuma (HLP)</h3>
            <p>Bandar Udara Halim Perdanakusuma merupakan bandar udara komersial yang melayani penerbangan internasional
                maupun domestik, selain itu bandar udara ini juga digunakan sebagai pangkalan militer markas Komando
                Operasi Angkatan Udara I (Koops AU I) TNI-AU.</p>
            <p>Lokasi: Jl. Halim Perdana Kusuma, Halim Perdana Kusumah, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus
                Ibukota Jakarta 13610</p>
        </content>
        <div class="rating">
            <h3>Berikan Rating:</h3>
            <form action="wisata.blade.php" method="get">
                <label>
                    <input type="radio" name="rating" value="1">
                    1 star
                </label>

                <label>
                    <input type="radio" name="rating" value="2">
                    2 stars
                </label>

                <label>
                    <input type="radio" name="rating" value="3">
                    3 stars
                </label>

                <label>
                    <input type="radio" name="rating" value="4">
                    4 stars
                </label>

                <label>
                    <input type="radio" name="rating" value="5">
                    5 stars
                </label><br><br>
                <button type="submit">Submit Rating</button>
            </form>
        </div>

        <footer>
            <b>&copy; Planning Jakarta</b>
        </footer>
    </div>
</body>

</html>
