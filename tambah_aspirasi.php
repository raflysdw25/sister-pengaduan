<?php 
    require 'assets/database/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat Jakarta</title>
    <link rel="icon" href="assets/img/group2.png" type="image/gif" sizes="16x16">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigasi -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">LAPORAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ASPIRASI</a>
                    </li>
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
                <ul class="navbar-nav ml-auto top-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <img src="assets/img/members-1.jpg" alt="" class="pp">
                            raflysdw25
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="">Notifikasi</a>
                            <a class="dropdown-item" href="">Pengaturan</a>
                            <a class="dropdown-item" href="" onclick="">Keluar</a>                         
                            </script>
                        </div>
                    </li>            
                </ul>
            </div>
        </div>
    </nav>

   <main style="margin-bottom: 25px">
        <div class="container">
            <h2 class="text-center laporan-heading">Laporan Pengaduan</h2>
            <form>
                <div class="form-group">
                    <label for="judulPengaduan">Judul Laporan</label>
                    <input type="email" class="form-control" id="judulPengaduan" placeholder="Ketik judul laporan...">
                </div>
                <div class="form-group">
                    <label for="isiPengaduan">Isi Laporan</label>
                    <textarea class="form-control" id="isiPengaduan" rows="3" placeholder="Ketik isi laporan..."></textarea>
                </div>
                <div class="form-group">
                    <label for="asalPelapor">Asal Pelapor</label>
                    <input type="email" class="form-control" id="asalPelapor" placeholder="Ketik asal pelapor..." required>
                </div>
                <div class="form-group">
                    <label for="instansiPengaduan">Instansi Tujuan</label>
                    <input type="email" class="form-control" id="instansiPengaduan" placeholder="Ketik instansi tujuan...">
                </div>
                <div class="form-group">
                    <label for="kategoriPengaduan">Kategori</label>
                    <select class="form-control">
                        <option selected>Pilih Kategori</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lampiranPengaduan">Upload Lampiran</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiranPengaduan">
                        <label class="custom-file-label">Choose file...</label>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="userStatus" value="anonim">
                        <label class="form-check-label" for="userStatus">Anonim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="userStatus" value="rahasia">
                        <label class="form-check-label" for="userStatus">Rahasia</label>
                    </div>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-cta mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

   <footer class="section-footer bg-dark text-white">
        <div class="container">
            <div class="row">
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
                        <div class="col-12 col-lg-7 text-right footer-sosmed">
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
            <div class="row border-top justify-content-center align-items-center p-3">
                <div class="col-auto">
                        2020 Copyright Kantor Pelayanan Masyarakat Indonesia
                </div>
            </div>
        </div>
   </footer>

   <script>
    $("#tanggalKejadian").datepicker({
        timepicker: true,
        datepicker: true,
        autoclose: true,
        format: 'dd/mm/yyyy'
    });
   </script>
   <script src="assets/js/jquery.js"></script> 
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>