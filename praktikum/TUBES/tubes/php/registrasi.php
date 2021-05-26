<?php
    require 'functions.php';

    if(isset($_POST["register"])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('Registrasi Berhasil!');
                document.location.href = 'login.php';
                </script>";
        } else {
            echo "<script>
            alert('Registrasi Gagal!');
            </script>";
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

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/registrasi.css?v2" />

    <title>REGISTRASI</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="wrapper col-6 left-col">
                <div class="container">
                    <h1 class="title-welcome">Create<br>Account</h1>
                    <div class="img-svg text-center">
                        <!-- <img src="../assets/svg/Login_vector.svg" alt="..."> -->
                    </div>
                </div>
            </div>
            <div class="wrapper col-6 right-col">
                <form action="" method="post">
                    <h1 class="title-login">Register</h1>
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

                    <div class="form-btn text-center">
                        <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6"
                            name="register">REGISTER</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>