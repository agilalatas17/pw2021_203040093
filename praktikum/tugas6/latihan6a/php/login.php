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
        $password = $POST['password'];
        $cek_user = mysqli_query(koneksi_db(), "SELECT * FROM user WHERE username = '$username");

        // mencocokan Username dan Password
        if(mysqli_fetch_assoc($cek_user)) {
            $row = mysqli_fetch_assoc($cek_user);
            if($password == $row['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = $row['id'];
            }

            if ($row = mysqli_fetch_assoc($cek_user)) {
                header("Location: admin.php");
                die;
            }

            header("Location: ../index.php");
            die;
        }
        $error = true;
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

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/login.css?v2" />

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
                    <?php if(isset($error)) : ?>
                    <p>Username atau Password salah</p>
                    <?php endif; ?>

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
                            <input type="text" class="form-control" name="password" id="password" required>
                        </div>
                    </div>

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

                </form>

            </div>
        </div>
    </div>
</body>

</html>