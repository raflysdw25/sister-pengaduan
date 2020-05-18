<?php 
    require 'assets/database/functions.php';

    session_start();
    if(isset($_POST["register"])){
        $result = tambah_user($_POST);
        if( $result > 0 ){
            $user_data = query("SELECT MAX(user_id) 'user_id' FROM users")[0];
            

            $_SESSION["user_id"] = $user_data["user_id"];

            echo "
                <script>
                    alert('Tahap 1 berhasil');
                    document.location.href='edit_profile.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Tahap 1 gagal, silahkan periksa kembali');
                    document.location.href='register.php';
                </script>
            ";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun | Layanan Pengaduan Masyarakat Online</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <section class="section-login row justify-content-center">
            <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center">Daftar Akun</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Username</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="username" reqruired>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                </div>

                                <button type="submit" name="register" class="btn btn-cta btn-block mt-4">Buat Akun</button>

                                <p class="text-center mt-4">
                                    <a href="login.php" class="btn btn-link text-muted">Sudah memiliki akun ? Login disini</a>
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