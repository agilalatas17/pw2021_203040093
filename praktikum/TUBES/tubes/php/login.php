<?php
    session_start();
    require 'functions.php';

    // melakukan pengecekan apakah user sudah melakukan login, jika sudah redirect ke halaman admin.
    if(isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }

    //login
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi_db(), "SELECT * FROM users WHERE username = '$username' ");

        //mencocokan username dan password
        if(mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);

            if(password_verify($password, $row['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);

                // jika remember me dicentang
                if(isset($_POST['remember'])) {
                    setcookie('username', $row['username'], time() + 60 * 60 * 24);
                    $hash = hash('sha256', $row['id']);
                    setcookie('hash', $hash, time() + 60 * 60 * 24);
                }

                if(hash('sha256', $row['id']) == $_SESSION['hash']) {
                    header("Location: admin.php");
                    die;
                }
                header("Location: ../index.php");
            }
        }
        $error = true;
    }

    // Cek Cookie
    if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        // ambil username berdasarkan id
        $result = mysqli_query(koneksi_db(), "SELECT * FROM users WHERE username = '$username' ");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if(hash === hash('sha256', $row['id'], false)) {
            $_SESSION['username'] = $row['username'];
            header("Location: admin.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- fontawesome css -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/login.css" />

    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="wrapper col-6 left-col">
                <div class="container">
                    <h1 class="title-welcome">Welcome<br>Back</h1>
                    <div class="img-svg text-center">
                        <!-- <img src="../assets/svg/Login_vector.svg" alt="..."> -->
                    </div>
                </div>
            </div>
            <div class="wrapper col-6 right-col">
                <form action="" method="post">
                    <h1 class="title-login">Log in</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </div>


                    <!-- Warning Text -->
                    <?php if(isset($error)) : ?>
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> Username atau Password salah</p>
                    <?php endif; ?>


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <div class="form-btn text-center">
                        <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6"
                            name="submit">LOGIN</button>
                    </div>

                    <div class="registrasi text-center">
                        <p>Belum punya Akun? Registrasi <a href="registrasi.php">Disini</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Script fontawesome -->
    <script src="../js/fontawesome.min.js"></script>
</body>

</html>