<?php 
    require 'assets/database/functions.php';
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
            <?php 
                //Tambah laporan
                if(isset($_POST["tambah_laporan"])){
                    $result = add_laporan($_POST);
                    if(!$result){
                        echo 
                        "<script> 
                            alert('Gagal tambah laporan');                
                        </script>";   
                    } else {
                        echo 
                        "<script> 
                            alert('Berhasil tambah laporan');                
                        </script>";  
                    }
                }
            ?>
            <form>
                <div class="form-group">
                    <label for="judulPengaduan">Judul Laporan</label>
                    <input type="text" class="form-control" name="judulPengaduan" placeholder="Ketik judul laporan..." required>
                </div>
                <div class="form-group">
                    <label for="isiPengaduan">Isi Laporan</label>
                    <textarea class="form-control form-control-alternative" name="isiPengaduan" rows="3" placeholder="Ketik isi laporan..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="jenisPengaduan">Jenis Laporan</label>
                    <select class="form-control" name="kategoriPengaduan">
                        <option selected>Pilih Jenis Laporan</option>
                        <option>Pengaduan</option>
                        <option>Aapirasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalKejadian">Tanggal Kejadian</label>
                    <input class="form-control datepicker" name="tanggalKejadian" placeholder="ex. YYYY-MM-DD 00:00:0" required>
                </div>
                <div class="form-group">
                    <label for="instansiPengaduan">Instansi Tujuan</label>
                    <input type="text" class="form-control" name="instansiPengaduan" placeholder="Ketik instansi tujuan..." required>
                </div>
                <div class="form-group">
                    <label for="kategoriPengaduan">Kategori</label>
                    <select class="form-control" name="kategoriPengaduan">
                        <option selected>Pilih Kategori</option>
                        <option>Kesehatan</option>
                        <option>Ekonomi</option>
                        <option>Pangan</option>
                        <option>Infrastruktur</option>
                        <option>Pendidikan</option>
                        <option>Sumber Daya Energi</option>
                        <option>Kesejahteraan Rakyat</option>
                        <option>Pertanian</option>
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