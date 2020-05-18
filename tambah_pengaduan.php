<?php 
    require 'assets/database/functions.php';

    session_start();
    if (!isset($_SESSION["login"])) {
        echo 
        "<script> 
                alert('Anda belum melakukan login, silahkan login terlebih dahulu');
                document.location = 'index.php';                
        </script>"; 
    }

    //Tambah laporan
    if(isset($_POST["tambah_laporan"])){
        $result = add_laporan($_POST);
        if($result > 0){
            echo 
            "<script> 
                alert('Berhasil tambah laporan');
                                
            </script>";  
        } else {
            echo 
            "<script> 
                alert('Gagal tambah laporan');                
            </script>";   
        }
    }
    /* Head */
    include('layouts/head.php');
?>
<body>
    <!-- Navigasi -->
    <?php include('layouts/navigation.php'); ?>
    <!-- Main Content -->
    <main style="margin-bottom: 25px">
        <div class="container">
            <h2 class="text-center laporan-heading">Laporan Pengaduan dan Aspirasi</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="judulPengaduan">Judul Laporan</label>
                    <input type="hidden" name="user_id" value="<?= $_SESSION["user_id"] ?>">
                    <input type="text" class="form-control" name="judulPengaduan" placeholder="Ketik judul laporan..." required>
                </div>
                <div class="form-group">
                    <label for="isiPengaduan">Isi Laporan</label>
                    <textarea class="form-control form-control-alternative" name="isiPengaduan" rows="3" placeholder="Ketik isi laporan..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="jenisPengaduan">Jenis Laporan</label>
                    <select class="form-control" name="jenisPengaduan">
                        <option selected>Pilih Jenis Laporan</option>
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Aspirasi">Aspirasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalKejadian">Tanggal Kejadian</label>
                    <input class="form-control" type="date" name="tanggalKejadian" placeholder="ex. YYYY-MM-DD 00:00:0" required>
                </div>
                <div class="form-group">
                    <label for="instansiPengaduan">Instansi Tujuan</label>
                    <input type="text" class="form-control" name="instansiPengaduan" placeholder="Ketik instansi tujuan..." required>
                </div>
                <div class="form-group">
                    <label for="kategoriPengaduan">Kategori</label>
                    <select class="form-control" name="kategoriPengaduan">
                        <option selected>Pilih Kategori</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Pangan">Pangan</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Sumber Daya Energi">Sumber Daya Energi</option>
                        <option value="Kesejahteraan Rakyat">Kesejahteraan Rakyat</option>
                        <option value="Pertanian">Pertanian</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="ml-auto">
                        <button type="submit" name="tambah_laporan" class="btn btn-cta mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>

    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>