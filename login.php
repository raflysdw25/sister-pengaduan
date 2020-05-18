<?php 
    require 'assets/database/functions.php';
    session_start();

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        //cek username
        if(mysqli_num_rows($result) === 1 ) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                $_SESSION["login"] = true;
                $_SESSION["user_id"] = $row["user_id"];
                echo "
                <script>
                    alert('Anda berhasil Login');
                    document.location.href='index.php';
                </script>";
            }

        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Layanan Pengaduan Masyarakat Online</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <section class="section-login row justify-content-center">
            <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Username</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="username">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>

                                <button type="submit" name="login" class="btn btn-cta btn-block mt-4">Submit</button>

                                <p class="text-center mt-4">
                                    <a href="register.php" class="btn btn-link text-muted">Belum terdaftar akun ? Daftar disini</a>
                                </p>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
    </div>


    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>