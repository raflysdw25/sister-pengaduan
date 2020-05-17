<?php 
    require 'assets/database/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat Jakarta</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/group2.png" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
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
            </div>
        </div>
    </nav>
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

   <main>
       <div class="container">
            <section class="section-steps row justify-content-center">
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
                       <p>213.071</p>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="section-laporan-content">
           <div class="container">
               <div class="section-aduan row">
                   <div class="col-sm-6 col-md-3 col-lg-4">
                      <div class="card-aduan d-flex flex-column">
                          <div class="aduan-judul">
                              <h3>Judul Laporan</h3>
                              <small class="badge bg-secondary text-white">Kesehatan</small>
                              <small class="badge verify">
                                   Selesai
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
                   <div class="col-sm-6 col-md-3 col-lg-4">
                      <div class="card-aduan d-flex flex-column">
                          <div class="aduan-judul">
                              <h3>Judul Laporan</h3>
                              <small class="badge bg-secondary text-white">Kesehatan</small>
                              <small class="badge action">
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
                   <div class="col-sm-6 col-md-3 col-lg-4">
                      <div class="card-aduan d-flex flex-column">
                          <div class="aduan-judul">
                              <h3>Judul Laporan</h3>
                              <small class="badge bg-secondary text-white">Kesehatan</small>
                              <small class="badge danger">
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

   <footer class="section-footer bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 p-5">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <img src="assets/img/group2.png" alt="" class="img-fluid img-footer">
                            <div class="footer-address">
                                <h2>Layanan Masyarakat Online</h2>
                                <p>
                                    Jl. Pengembangan Abadi No. 2A <br>
                                    Jakarta Pusat, DKI Jakarta 154123
                                </p>
                                <p>
                                    (021) 7766521
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 text-right">
                            <h4>Sosial Media</h4>
                            <ul class="list-unstyled">
                                <li class="d-inline mr-2">
                                    <a href="" class="">
                                        <img src="assets/img/ig.png" alt="" class="img-fluid img-sosmed">
                                    </a>
                                </li>
                                <li class="d-inline mr-2">
                                    <a href="" class="">
                                        <img src="assets/img/twitter.png" alt="" class="img-fluid img-sosmed">
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="" class="">
                                        <img src="assets/img/fb.png" alt="" class="img-fluid img-sosmed">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center p-4">
                <div class="col-auto">
                        2020 Copyright Kantor Pelayanan Masyarakat Indonesia
                </div>
            </div>
        </div>
   </footer>

   <script src="assets/js/jquery.js"></script> 
   <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>