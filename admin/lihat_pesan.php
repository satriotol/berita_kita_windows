<?php
include "layout/header.php";
require 'function.php';
$id = $_GET["id"];
$pesan_pengirim = query("SELECT * FROM pesan_pengirim WHERE id_pesan = $id")[0];
?>
<html>
    <link rel="stylesheet" href="css/edit_berita.css">
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id_pesan" value="<?= $pesan_pengirim["id_pesan"];?>">
        <div class="edit-label">
            <label for="nama_pengirim">Nama Lengkap</label> <br>
                <input type="text" name="nama_pengirim" placeholder="masukan judul utama.."
                value="<?=$pesan_pengirim["nama_pengirim"];?>" readonly>  <br>
            <label for="email_pengirim">E-mail</label> <br>
                <input type="text" name="email_pengirim" placeholder="masukan email_pengirim.."
                value="<?=$pesan_pengirim["email_pengirim"];?>" readonly>  <br>
            <label for="isi_pesan">Pesan</label> <br>
                <label for="isi_pesan"><?=$pesan_pengirim["isi_pesan"];?></label>
                <label type="text" name="isi_pesan" placeholder="masukan isi_pesa.."
                value="<?=$pesan_pengirim["isi_pesan"];?>" readonly> <br>
        </div>
    </ul>
</form>
</html>