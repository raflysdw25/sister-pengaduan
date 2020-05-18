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
            <h2 class="text-center laporan-heading">Laporan Aspirasi</h2>
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
    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>
    
   <script src="assets/js/jquery.js"></script> 
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>