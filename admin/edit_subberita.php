<?php
include "layout/header.php";
require 'function.php';
$id = $_GET["id"];
$subberita = query("SELECT * FROM subberita WHERE id_subberita = $id")[0];
if(isset($_POST["submit"])){
    if(ubah_subberita($_POST)>0){
        echo "
        <script>
            alert ('data berhasil diubah!');
            document.location.href ='list_subberita.php'
        </script>
        ";
    }
} 
?>
<html>
    <head>
        <link rel="stylesheet" href="css/edit_berita.css">
    </head>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id_subberita" value="<?= $subberita["id_subberita"];?>">
        <div class="edit-label">
            <label for="judul_sub">Judul Utama</label>
                <input type="text" name="judul_sub" placeholder="masukan judul utama.."
                required value="<?=$subberita["judul_sub"];?>"> <br>
            <label for="subjudul_sub">subjudul_sub</label>
                <input type="text" name="subjudul_sub" placeholder="masukan subjudul_sub.."
                required value="<?=$subberita["subjudul_sub"];?>"> <br>
            <label for="link_sub">link_sub</label> <br>
                <input type="url" name="link_sub" placeholder="masukan link_sub.."
                required value="<?=$subberita["link_sub"];?>"> <br>
        </div>
            <input type="submit"name="submit" value="Ubah Data!">
    </ul>
</form>
</html>