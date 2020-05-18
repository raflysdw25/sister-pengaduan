<?php 
    require 'assets/database/functions.php';

    
    // Login
    if (isset($_POST["login"])) {
        $result = user_login($_POST);
        if($result){
            echo 
            "<script> 
                alert('Username/Password salah, silahkan coba lagi');                
            </script>";   
        }
    }

    // Register
    if(isset($_POST["register"])){
        $result = user_register($_POST);
        if(!$result){
            echo 
            "<script> 
                alert('Masih terdapat data yang tidak sesuai');                
            </script>";   
        }
    }

    //Data Laporan
    $reports = query("SELECT p.*, up.nama, up.username FROM pengaduan p JOIN user_profile up ON (p.up_id = up.up_id) LIMIT 3");
    $count_data = count($reports);

    /* Head */
    include('layouts/head.php');
?>
<body>
    <!-- Navigasi -->
    <?php include('layouts/navigation.php'); ?>
    <!-- Header -->
    <header id="header" class="text-center">
        <h1>LAYANAN MASYARAKAT ONLINE</h1>
        <p class="mt-3">
            Sampaikan Laporan Anda Langsung ke Instansi yang Berwenang
        </p>
        <?php if(!isset($_SESSION["user_id"]) || !isset($_SESSION["login"])): ?> 
            <button type="button" class="btn btn btn-cta" data-toggle="modal" data-target="#modalLogin">
                Masuk
            </button>
            <button type="button" class="btn btn-cta-outline" data-toggle="modal" data-target="#modalSignup">
                Daftar
            </button>
        <?php else: ?>
            <a href="#" class="btn btn-cta">Buat Laporan</a>
        <?php endif; ?>            
    </header> 
    <!-- Modal -->
    <?php include('signin.php'); ?>
    <?php include('signup.php'); ?>
    <!-- Main Content -->
    <main>
        <!-- Alur Pengaduan Section -->
        <div class="container">
            <section class="section-steps row justify-content-center shadow-sm p-3 mb-5 bg-white">
                <div class="col-3 col-md-2 steps-item">
                    <img src="assets/img/ballpoint.png" alt="">
                    <h2>Tulis Laporan</h2>
                    <p>
                        Laporkan Keluhan atau aspirasi anda dengan jelas
                    </p>
                </div>
                <div class="col-3 col-md-2 steps-item">
                    <img src="assets/img/verif.png" alt="">
                    <h2>Verifikasi</h2>
                    <p>
                        Dalam 3 hari, laporan anda akan diverifikasi dan diteruskan kepada pihak berwenang
                    </p>
                </div>
                <div class="col-3 col-md-2 steps-item">
                    <img src="assets/img/followup.png" alt="">
                    <h2>Tindak Lanjut</h2>
                    <p>
                        Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan anda
                    </p>
                </div>
                <div class="col-3 col-md-2 steps-item">
                    <img src="assets/img/response.png" alt="">
                    <h2>Beri Tanggapan</h2>
                    <p>
                       Anda dapat menanggapi kembali balasan yang diberikan 
                    </p>
                </div>
                <div class="col-3 col-md-2 steps-item">
                    <img src="assets/img/done.png" alt="">
                    <h2>Selesai</h2>
                    <p>
                        Laporkan Keluhan atau aspirasi anda dengan jelas
                    </p>
                </div>
            </section>
       </div>

       <!-- Jumlah -->
       <section class="section-laporan">
           <div class="container">
               <div class="row">
                   <div class="col text-center laporan-heading">
                       <h2>JUMLAH LAPORAN SAAT INI</h2>
                       <p><?= $count_data?></p>
                   </div>
               </div>
           </div>
       </section>
       
       <!-- Sneak Peek Laporan Section -->
       <section class="section-laporan-content">
            <div class="container">
                <div class="section-aduan row justify-content-center">
                    <?php foreach($reports as $report): 
                        if($report["status"] == "Selesai"){
                            $badge = 'done';
                            $image = 'selesai.png';
                        }else if($report["status"] == "Tindak Lanjut"){
                            $badge = 'action';
                            $image = 'followup-orange.png';
                        }else if($report["status"] == "Verifikasi"){
                            $badge = 'verify';
                            $image = 'verif-red.png';
                        }
                        
                        ?>
                    <div class="col-sm col-md-4 col-lg-4">
                        <div class="card-aduan d-flex flex-column shadow-sm mb-5">
                            <div class="aduan-judul">
                                <h3><?= $report["judul"]?></h3>
                                <small class="badge bg-secondary text-white"><?= $report["kategori"]?></small>
                                <small class="badge <?= $badge?>">
                                   <img src="assets/img/<?= $image ?>" alt="">
                                   <?= $report["status"]?>
                                </small>
                            </div>
                            <div class="aduan-isi">
                                <?= $report["deskripsi"]?>
                            </div>
                            <div class="aduan-pelapor">
                                <img src="assets/img/members-1.jpg" alt="" class="pelapor-image">
                                <div class="description">
                                    <h3><?= $report["nama"]?></h3>
                                    <small class="text-muted"><?= $report["username"]?></small>
                                </div>
                            </div>
                        </div>  
                    </div>
                   <?php endforeach; ?>                     
                </div>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-cta">Lihat Semua Laporan</a>
                </div>
            </div>
        </section>


       
        <!-- Sampaikan Aspirasi -->
       <section class="section-aspirasi">
            <div class="message-aspirasi row">
                <div class="container">
                    <div class="col-lg-8">
                    <h2>Sampaikan Aspirasi</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laudantium quibusdam, ratione dolorum commodi labore doloribus quidem assumenda totam minus eaque unde sed blanditiis. Omnis sunt maxime error illum qui.</p>
                    </div>
                </div>
            </div>
        </section>
        
      
    </main>
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>

   <script src="assets/js/jquery.js"></script> 
   <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>