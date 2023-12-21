<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login-wisata.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="/" id="loginForm" method="get">
            <label for="username">Username:</label>
            <input type="text" id="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" required>

            <button type="button" onclick="login()">Login</button>
        </form>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
