<?php
include "layout/header.php";
require 'function.php';
$id = $_GET["id"];
$alumni = query("SELECT * FROM alumni WHERE id_alumni = $id")[0];
?>
<html>
    <link rel="stylesheet" href="css/edit_berita.css">
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id_alumni" value="<?= $alumni["id_alumni"];?>">
        <div class="edit-label">
            <label for="nama_lengkap">Nama Lengkap</label> <br>
                <input type="text" name="nama_lengkap" placeholder="masukan judul utama.."
                required value="<?=$alumni["nama_lengkap"];?>" readonly>  <br>
            <label for="email">E-mail</label> <br>
                <input type="text" name="email" placeholder="masukan email.."
                required value="<?=$alumni["email"];?>" readonly>  <br>
            <label for="alamat_sekarang">Alamat Sekarang</label> <br>
                <input type="text" name="alamat_sekarang" placeholder="masukan alamat_sekarang.."
                required value="<?=$alumni["alamat_sekarang"];?>" readonly>  <br>
            <label for="nomer_telepon">Nomer Telepon</label> <br>
                <input type="text" name="nomer_telepon" placeholder="masukan nomer_telepon.."
                required value="<?=$alumni["nomer_telepon"];?>" readonly>  <br>
            <label for="alamat_perusahaan">Alamat Perusahaan</label> <br>
                <input type="text" name="alamat_perusahaan" placeholder="masukan alamat_perusahaan.."
                required value="<?=$alumni["alamat_perusahaan"];?>" readonly>  <br>
            <label for="jenjang">Jenjang</label> <br>
                <input type="text" name="jenjang" placeholder="masukan jenjang.."
                required value="<?=$alumni["jenjang"];?>" readonly>  <br>
        </div>
    </ul>
</form>
</html>