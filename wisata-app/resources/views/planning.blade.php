<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL PLANNING</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="kontainer">
        <header>
            <h1>Planning <span class="plan">Jakarta</span></h1>
            <ul>
                <li>
                    <b><a href="/planning"> Home</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/annisrzy/" target="_blank"> Contact</a>
                </li>
                <li>
                    <a href="/login-wisata" onclick="logout()"> Logout</a></b>
                </li>
            </ul>
        </header>
        <nav>
            <div class="image-grid">
                <div>
                    <a href="/airport" target="_blank"><img src="img/airport.jpg" alt="city"></a>
                    <p>Airport</p>
                </div>
                <div>
                    <a href="/pasar" target="_blank"><img src="img/pasar.jpg" alt="city"></a>
                    <p>Pasar</p>
                </div>
                <div>
                    <a href="/monumen" target="_blank"><img src="img/monumen.jpg" alt="city"></a>
                    <p>Monumen</p>
                </div>
                <div>
                    <a href="/museum" target="_blank"><img src="img/museum.jpg" alt="city"></a>
                    <p>Museum</p>
                </div>
                <div>
                    <a href="/taman" target="_blank"><img src="img/taman.jpg" alt="city"></a>
                    <p>Taman</p>
                </div>
                <div>
                    <a href="/mall" target="_blank"><img src="img/mall.jpg" alt="city"></a>
                    <p>Mall</p>
                </div>
                <div>
                    <a href="/transport" target="_blank"><img src="img/transport.jpg" alt="city"></a>
                    <p>Transport</p>
                </div>
            </div>
        </nav>
        <main>
            <div style="text-align: left;">
                <h1 style="text-align: center;">Welcome To Jakarta!</h1>
                <p style="line-height: 30px; font-size:large;"> Jakarta adalah ibu kota Indonesia yang menjadi salah satu tempat wisata yang di minati oleh para wisatawan
                    lokal maupun macanegara.
                    Dengan beragam keindahan tempat wisata, kesenian budaya, destinasi pariwisata, dan kuliner,
                    pemandangan city lights yang memukau menjadi hal yang tidak mungkin dilewatkan, yang menjadikan Jakarta
                    memberikan kesan yang tak terlupakan bagi para wisatawan.
                </p>
                <p id="planning-jkt" style="font-size: larger;"></p>
            </div>
        <div class="saran">
            <form action="" style="float: right;">
                <h3>Saran:</h3>
                <textarea name="saran" id="" cols="80" rows="10"></textarea>
                <br>
                <div class="button">
                    <button>Kirim Saran</button>
                </div>
            </form>
        </div>
    </main>
        <footer>
            <b>&copy; 2023. Planning Jakarta</b>
        </footer>
    </div>

</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>
