<?php
require 'admin/function.php';
include 'header.php';
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM berita WHERE kategori = 'SOCDEV'"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
$index = query("SELECT * FROM berita WHERE kategori = 'SOCDEV'  ORDER BY id DESC ");
$subberita = query("SELECT * FROM subberita ORDER BY subberita.id_subberita DESC");
$video = query("SELECT * FROM video");

?>
<!DOCTYPE html>
<html lang="en">
<body id="page-top">
    <!-- Header -->
    <header>
    <?php
        include 'slide/slide_socdev.php';
    ?>
    </header>
    <div class="container-wrapper">
        <div class="main-page-header">
            <h1 class="main-page-title">SOCDEV</h1>
        </div>
        <div class="pendahuluan">
            <div class="pendahuluan-img">
                <img width="100" src="images/departemen/SOCDEV.png" alt="">
            </div>
            <div class="pendahuluan-article">
                <h5 class="pendahuluan-article-title">SOCDEV</h5>
                <div style="text-align:justify;">
                Smart student competition (S2C)  merupakan olimpiade matematika dan fisika tingkat nasional yang diperuntukan untuk seluruh siwa-siswi SMA/MA dan SMK sederajat yang ada di lingkup nasional, S2C terdiri dari tiga babak yaitu babak penyisihan berupa pengerjaan soal pilihan ganda, babak semifinal berupa pengerjaan soal essay, dan babak final berupa pertanyaan studi kasus. 
                S2C sendiri bertujuan untuk mengembangkan potensi intelektual siswa-siswi di indonesia dalam bidang matematika dan fisika, dan juga meningkatkan motivasi berprestasi siswa-siswi di Indonesia dalam dalam bidang matematika dan fisika. 
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