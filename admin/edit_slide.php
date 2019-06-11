<?php
include "layout/header.php";
require 'function.php';
$id = $_GET["id"];
$slide_gbr = query("SELECT * FROM slide WHERE id_slide = $id")[0];
if(isset($_POST["submit"])){
    if(ubah_slide($_POST)>0){
        echo "
        <script>
            alert ('slide berhasil diubah!');
            document.location.href ='list_slide.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert ('slide gagal diubah!');
            document.location.href ='#'
        </script>
        ";
    }
} ?>
<html>
<link href="css/tambah.css"  rel="stylesheet">
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id_slide" value="<?= $slide_gbr["id_slide"];?>">
        <input type="hidden" name="slide_lama" value="<?= $slide_gbr["slide_gambar"];?>">
        <label for="main_judul">Judul Utama</label>
            <input type="text" id="main_judul" name="main_judul" placeholder="masukan judul utama.."
            value="<?=$slide_gbr["main_judul"];?>"> <br>
        <label for="sub_judul">Sub Judul</label>
            <input type="text" id="sub_judul" name="sub_judul" placeholder="masukan sub judul.."
            value="<?=$slide_gbr["sub_judul"];?>"> <br>
        <label for="slide_gambar">Slide Gambar</label> 
            <input type="file" id="slide_gambar" name="slide_gambar">
        <img src="../upload/<?=$slide_gbr ['slide_gambar'];?>" width="40"> <br>
        <input type="submit"name="submit" value="Ubah Data!">
    </ul>
</form>
</html>