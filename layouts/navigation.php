<?php 

    session_start();

    if(isset($_POST["logout"])){
        $_SESSION = [];
        session_unset();
        session_destroy();

        header("location: index.php");
        exit;
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow-sm p-3 mb-5 bg-white">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/group2.png" class="img-fluid" alt="">
        </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!--jika sudah login -->
                <li class="nav-item">
                    <a class="nav-link" href="page_laporan.php">LAPORAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_aspirasi.php">ASPIRASI</a>
                </li>
                <!-- -->
                <li class="nav-item">
                    <a class="nav-link" href="#">TENTANG</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="#">KETENTUAN</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="#">KONTAK</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>
            <!--jika sudah login -->
            <?php if(isset($_SESSION["user_id"]) && isset($_SESSION["login"])):
                $user_id = $_SESSION["user_id"]; 
                $user_profile = query("SELECT * FROM user_profile WHERE up_id = $user_id")[0];
                ?>
            <ul class="navbar-nav ml-auto top-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="assets/img/members-1.jpg" alt="" class="pp">
                        <?= $user_profile["nama"] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Notifikasi</a>
                        <a class="dropdown-item" href="#">Pengaturan</a>
                        <div class="dropdown-divider"></div>
                        <form action="" method="post">
                            <button class="dropdown-item" type="submit" name="logout" onclick="return confirm('Apakah anda ingin Keluar ? ')">Keluar</button>
                        </form>                         
                        </script>
                    </div>
                </li>            
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>