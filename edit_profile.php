<?php 
    require 'assets/database/functions.php';

    session_start(); 
    if(!isset($_SESSION["user_id"])){        
        echo "
            <script>
                alert('Anda belum membuat akun, silahkan buat akun dahulu');
                document.location.href='register.php';
            </script>
        ";   
    }
    
    $user_id = $_SESSION["user_id"];

    if(isset($_POST["register"])){
        $result = edit_profile($_POST);
        if( $result > 0 ){
            echo "
                <script>
                    alert('Pendaftaran Berhasil dilakukan');
                    document.location.href='index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Terjadi kesalahan, silahkan hubungi admin');
                    
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
    <title>Lengkapi Biodata Diri | Layanan Pengaduan Masyarakat Online</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <section class="section-login row justify-content-center">
            <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center">Biodata Diri</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama</label>
                                  <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                  <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">No Telephone</label>
                                  <input type="tel" class="form-control" id="telephone" name="telephone">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control" id="email" name="email">
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