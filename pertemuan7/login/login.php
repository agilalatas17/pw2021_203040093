<?php
// cek tombol submit ditekan / belum
if ( isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "rootadmin") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .pesan-kesalahan {
            color: red;
            font-style: italic;
        }
    </style>

    <title>Login</title>
</head>
<body>


    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <?php if ( isset($error) ) : ?>
                <p class="pesan-kesalahan">Username atau Password Anda salah!</p>
            <?php endif; ?>
            <li>
                <button type="submit" name="submit">MASUK</button>
            </li>
        </form>
    </ul>
</body>
</html>