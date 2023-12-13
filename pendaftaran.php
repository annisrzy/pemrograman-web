<?php
$registration_success = false;
$login_error = false;
function isUserDataFileExists() {
    $file = 'member_data.txt';
    return file_exists($file) && filesize($file) > 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        
        $nama_member = isset($_POST["nama_member"]) ? $_POST["nama_member"] : '';
        $email_member = isset($_POST["email_member"]) ? $_POST["email_member"] : '';
        $password_member = isset($_POST["password_member"]) ? $_POST["password_member"] : '';

        $file = 'member_data.txt';
        $data = "$nama_member, $email_member, $password_member\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        $registration_success = true;
    } elseif (isset($_POST['login'])) {
        
        $email_login = isset($_POST["email_login"]) ? $_POST["email_login"] : '';
        $password_login = isset($_POST["password_login"]) ? $_POST["password_login"] : '';

        $users = file('member_data.txt', FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            $userInfo = explode(', ', $user);
            if (count($userInfo) >= 3) {
                list($nama_member, $email_member, $password_member) = $userInfo;
                if ($email_member === $email_login && $password_member === $password_login) {
                    
                    header("Location: beranda.php");
                    exit();
                }
            }
        }
        $login_error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body{
            font-family: Helvetica;
            margin: 20px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }
        form{
            margin-bottom: 20px;
            text-align: center;
            align-items: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.35);
            padding: 50px;
        }

        .login{
            background-color: #f0f0f0;
        }

        h1{
            color: #333;
        }
    </style>
</head>
<body>
    <div class="register">
        <?php
        if ($registration_success){
            echo '<p>Registrasi berhasil! Anda sekarang dapat melakukan login</p>';
        } elseif ($login_error){
            echo '<p>Email atau password salah. Silakan coba lagi.</p>';
        } else{
            if (!isUserDataFileExists()){
                echo '<p>Tidak ada data pengguna yang terdaftar. Silakan daftar untuk membuat akun baru.</p>';
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1><b>Register</b></h1>
            <br><br>

            <label for="nama_member">Name:</label>
            <input type="text" id="nama_member" name="nama_member" required>
            <br><br>

            <label for="email_member">Email:</label>
            <input type="email" id="email_member" name="email_member" required>
            <br><br>

            <label for="password_member">Password:</label>
            <input type="password" id="password_member" name="password_member" required>
            <br><br>

            <button type="submit" name="register">Register</button>
        </form>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1><b>Login</b></h1>
            <br><br>

            <label for="email_login">Email:</label>
            <input type="email" id="email_login" name="email_login" required>
            <br><br>

            <label for="password_login">Password:</label>
            <input type="password" id="password_login" name="password_login" required>
            <br><br>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
