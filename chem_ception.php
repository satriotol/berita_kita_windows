<?php
require 'admin/function.php';
include 'header.php';
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM berita WHERE kategori = 'CEPTION' "));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
$index = query("SELECT * FROM berita WHERE kategori = 'CEPTION' ORDER BY id DESC");
$subberita = query("SELECT * FROM subberita ORDER BY subberita.id_subberita DESC");
$video = query("SELECT * FROM video");

?>
<!DOCTYPE html>
<html lang="en">
<body id="page-top">
    <!-- Header -->
    <header>
    <?php
        include 'slide/slide_ception.php';
    ?>
    </header>
    <div class="container-wrapper">
        <div class="main-page-header">
            <h1 class="main-page-title">CEPTION</h1>
        </div>
        <div class="pendahuluan">
            <div class="pendahuluan-img">
                <!-- <img width="100" src="images/departemen/HRD.png" alt=""> -->
            </div>
            <div class="pendahuluan-article">
                <h5 class="pendahuluan-article-title">CEPTION</h5>
                <div style="text-align:justify;">
                Chemical Engineering Paper Competition [CEPTION] 2019 merupakan salah satu program kerja 
                HMPTK 2019 yang bergerak dalam bidang riset dan teknologi yang berupa Lomba Karya Tulis Ilmiah tingkat nasional 
                dan bertujuan untuk meningkatkan ketrampilan menulis bagi para mahasiswa di tingkat perguruan tinggi. CEPTION tidak 
                hanya berfokus dalam bidang riset saja, sebagai bentuk inovasi, prestasi dan kontribusi peserta CEPTION akan mengikuti 
                salah satu serangkaian acara dari CEPTION yang bergerak dalam bidang pengabdian yaitu lensa sosial dimana peserta akan 
                melakukan kegiatan belajar dan mengajar dengan anak-anak panti asuhan.
                </div>  
            </div>
        </div>
        <div class="main-page-container">
            <section class="posts-container">
                <?php foreach ($index as $row) : ?>
                <div class="posts-wrapper">
                    <article>
                        <div>
                            <div class="image-title-message">
                                <div class="post-image-container">
                                    <a class="post-image-container" href="lihat_berita.php?id=<?= $row["id"]; ?>">
                                        <img src="upload/<?= $row["gambar"]; ?>">
                                    </a>               
                                </div>
                                <div class="image-message-wrapper">
                                    <h3 class="post-title"><a href="lihat_berita.php?id=<?= $row["id"]; ?>">
                                            <?= $row["judul"]; ?></a></h3>
                                    <p>
                                        <?= $row["tanggal_berita"]; ?>
                                    </p>
                                    <p class="post-message" style="text-align: justify;">
                                        <?= custom_echo($row["isi"], 200); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach ?>
                <!-- halaman pagenation -->
                <div class="main-page-slider">
                    <?php if ($halamanAktif > 1) : ?>
                    <a href="?halaman=<?= $halamanAktif - 1; ?>">&#8592;</a>
                    <?php endif; ?>
                    <br>
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                    <a href="?halaman=<?= $i; ?>">
                        <?= $i; ?></a>
                    <?php else : ?>
                    <a href="?halaman=<?= $i; ?>">
                        <?= $i; ?></a>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <a href="?halaman=<?= $halamanAktif + 1; ?>">&#8594;</a>
                    <?php endif; ?>
                </div>
            </section>
            <aside>
                <div class="aside-iframe-container">
                    <h2 class="video-hmptk">Video HMPTK</h2>
                    <br>
                    <?php foreach($video as $row):?>
                        <iframe src="<?=$row["link_video"] ?>" frameborder=0></iframe>
                    <br>
                    <?php endforeach?>
                    <h2 class="co-card-label-text">Pengumuman</h2>
                    <div>
                        <?php foreach($subberita as $row):?>
                        <div>
                            <h3 class="co-card">
                                <?=$row["judul_sub"];?>
                            </h3>
                            <p class="co-card">
                                <?=$row["subjudul_sub"];?> <a target="_blank" href="<?=$row["link_sub"];?> ">Klik
                                    disini!</a></p>
                        </div>
                        <?php endforeach?>
                    </div>
                    <br>
            </aside>
        </div>
    </div>


    </section>
    <p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>
    <!-- footer -->
</body>

<?php 
        include "footer.php";
?>
</html>