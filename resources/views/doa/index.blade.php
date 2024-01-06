<!-- resources/views/doa/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Doa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7fa6a8;
            padding: 20px;
            margin: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            line-height: 1.5;
        }

        strong {
            color: #67a6aa;
        }
    </style>
</head>

<body>
    <h1>== Daftar Doa ==</h1>
    <ul>
        @foreach ($doaData as $doa)
            <li>
                <strong>Doa:</strong> {{ $doa['doa'] }} <br>
                <strong>Ayat:</strong> {{ $doa['ayat'] }} <br>
                <strong>Latin:</strong> {{ $doa['latin'] }} <br>
                <strong>Artinya:</strong> {{ $doa['artinya'] }}
            </li>
        @endforeach
    </ul>
</body>

</html>
