<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/login.css" />

    <title>Login</title>
</head>

<body>
    <div class="row">
        <div class="col-6">
            <div class="wrapper">
                <h1>ini colom 1</h1>
                <div class="3d-model"></div>
            </div>
        </div>
        <div class="col-6">
            <h1>ini kolom2 </h1>
            <form action="" method="post">
                <?php if(isset($error)) : ?>
                <p>Username atau Password salah</p>
                <?php endif; ?>


            </form>
        </div>
    </div>
</body>

</html>