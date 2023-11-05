<?php
session_start();
require("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="hiasan">
            <svg xmlns="http://www.w3.org/2000/svg" width="2310" height="100vh" viewBox="0 0 2310 1100" fill="none">
                <path
                    d="M1.13454 1082.67L-12.6858 -8.00002L606.3 -3.84842C606.3 -3.84842 818.998 882.153 577.314 610.526C335.631 338.899 1.13454 1082.67 1.13454 1082.67Z"
                    fill="#93908B" />
            </svg>
        </div>
        <div class="img-hero">
            <img src="image/hero-login.png" alt="">
        </div>
        <form method="post">
            <div class="login">

                <h1 class="wel">Welcome</h1>
                <div class="avatar">
                    <img src="image/avatar.png">
                </div>
                <div class="input-div">
                    <div class="field">
                        <input type="text" name="username" autocomplete="off" required="">
                        <label>Nama</label>
                    </div>
                    <div class="field">
                        <input type="password" name="password" autocomplete="off" required="">
                        <label>Password</label>
                    </div>

                </div>

                <button class="btn-lg" name="kirim">
                    <h2>LOGIN</h2>
                </button>
                <?php
                if (isset($_POST['kirim'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM users WHERE username ='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);
                    if ($countdata > 0) {
                        if (password_verify($password, $data['password'])) {
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['nama'] = $data['name_usr'];
                            $_SESSION['login'] = true;
                            header('location: index.php');
                        } else {
                            ?>
                            <div class="danger">Password Salah!</div>
                            <meta>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="danger">Data yang kamu masukan Salah!</div>

                        <?php
                    }
                }

                ?>
            </div>
        </form>
    </div>
</body>

</html>