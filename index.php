<?php 
    require 'assets/database/functions.php';
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
        <a href="#" class="btn btn-cta">
            Masuk
        </a> 
        <a href="#" class="btn btn-cta-outline">
            Daftar
        </a> 
    </header> 
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
       <!-- Jumlah Laporan Section -->
        <section class="section-laporan">
            <div class="container">
                <div class="row">
                    <div class="col text-center laporan-heading">
                        <h2>JUMLAH LAPORAN SAAT INI</h2>
                        <p>213.071</p>
                    </div>
                </div>
            </div>
        </section>
       <!-- Sneak Peek Laporan Section -->
        <section class="section-laporan-content">
            <div class="container">
                <div class="section-aduan row">
                    <div class="col-sm col-md-4 col-lg-4">
                        <div class="card-aduan d-flex flex-column shadow-sm p-3 mb-5 bg-white">
                            <div class="aduan-judul">
                                <h3>Judul Laporan</h3>
                                <small class="badge bg-secondary text-white">Kesehatan</small>
                                <small class="badge verify">
                                   <img src="assets/img/selesai.png" alt="">
                                    Selesai
                                </small>
                            </div>
                            <div class="aduan-isi">
                               Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                               Hic dolore a ut aperiam amet voluptate id, quo delectus officiis? 
                               Fugiat reiciendis repellat sequi commodi explicabo quisquam nihil sapiente molestias dignissimos?
                            </div>
                            <div class="aduan-pelapor">
                                <img src="assets/img/members-1.jpg" alt="" class="pelapor-image">
                                <div class="description">
                                    <h3>Muhammad Rafly Sadewa</h3>
                                    <small class="text-muted">raflysdw25</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm col-md-4 col-lg-4">
                        <div class="card-aduan d-flex flex-column shadow-sm p-3 mb-5 bg-white">
                            <div class="aduan-judul">
                                <h3>Judul Laporan</h3>
                                <small class="badge bg-secondary text-white">Kesehatan</small>
                                <small class="badge action">
                                    <img src="assets/img/followup-orange.png" alt="">
                                    Tindak Lanjut
                                </small>
                            </div>
                            <div class="aduan-isi">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic dolore a ut aperiam amet voluptate id, quo delectus officiis? Fugiat reiciendis repellat sequi commodi explicabo quisquam nihil sapiente molestias dignissimos?
                            </div>
                            <div class="aduan-pelapor">
                                <img src="assets/img/members-1.jpg" alt="" class="pelapor-image">
                                <div class="description">
                                    <h3>Muhammad Rafly Sadewa</h3>
                                    <small class="text-muted">raflysdw25</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm col-md-4 col-lg-4">
                        <div class="card-aduan d-flex flex-column shadow-sm p-3 mb-5 bg-white">
                            <div class="aduan-judul">
                                <h3>Judul Laporan</h3>
                                <small class="badge bg-secondary text-white">Kesehatan</small>
                                <small class="badge danger">
                                <img src="assets/img/verif-red.png" alt="">
                                    Terverifikasi
                                </small>
                            </div>
                            <div class="aduan-isi">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic dolore a ut aperiam amet voluptate id, quo delectus officiis? Fugiat reiciendis repellat sequi commodi explicabo quisquam nihil sapiente molestias dignissimos?
                            </div>
                            <div class="aduan-pelapor">
                                <img src="assets/img/members-1.jpg" alt="" class="pelapor-image">
                                <div class="description">
                                    <h3>Muhammad Rafly Sadewa</h3>
                                    <small class="text-muted">raflysdw25</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
       <!-- Sampaikan Aspirasi Section-->
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
    <?php include('layouts/footer.php'); ?>>

   <script src="assets/js/jquery.js"></script> 
   <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>