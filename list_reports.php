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
<div class="row list-content-laporan" style="margin-bottom:35px;">
    <div class="col-2">
        <img src="assets/img/members-2.png" style="width: 55px;" class="rounded mx-auto d-block">
    </div>
    <div class="col-10">
        <div class="row justify-content-start">
            <div class="col nama-laporan">
                <span><?= $report["nama"]?></span>
            </div>
            <div class="col tgl-laporan text-right">
                <span><?= $report["created_at"]?></span>
            </div>
            <div class="col-12 kategori-laporan">
                <small class="badge bg-secondary text-white"><?= $report["kategori"]?></small>
                <span style="font-size: 12px; color: grey;">
                    <?= $report["instansi"]?>
                <span>
            </div>
            <div class="col-9 judul-laporan">
                <span><?= $report["judul"]?></span>
            </div>
            <div class="col-3 status-laporan text-right">
                <small class="badge <?= $badge?>">
                    <img src="assets/img/<?= $image?>" alt="">
                    <?= $report["status"]?>
                </small>
            </div>
            <div class="col-12 isi-laporan">
                <span><?= $report["deskripsi"]?></span>
            </div>
            <div class="col-12 jenis-laporan" style="">
                <span><i class="far fa-calendar-alt"></i>   <?= $report["tgl_kejadian"]?> | <?= $report["jenis"]?></span>
            </div>
            <div class="col-7 komentar-laporan" style="padding-top: 15px;">
                <span>
                    <img src="assets/img/comment.png" style="width: 20px;">
                    Komentar 0
                </span>
                <span>
                <img src="assets/img/dukung.png" style="width: 20px;">
                    Dukung 0
                </span>
                <span>
                    <img src="assets/img/share.png" style="width: 16px;">
                        Bagikan
                </span>
            </div>
        </div> 
    </div>
</div>
<hr/>
<?php endforeach; ?>