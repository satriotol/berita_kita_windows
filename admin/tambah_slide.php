<?php
include "layout/header.php";
require 'function.php';
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah_slide_gambar($_POST)>0){
        echo "
        <script>
            alert ('gambar berhasil ditambahkan!');
            document.location.href ='list_slide.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert ('gambar gagal ditambahkan!');
            document.location.href ='list_slide.php'
        </script>
        ";
    }
}
$query = "SELECT * FROM slide order by id_slide ASC";
$result1 = mysqli_query($conn,$query);
?>
<form action="" method="post" enctype="multipart/form-data">
<head>
    <link href="css/tambah.css"  rel="stylesheet">
</head>
    
    Judul Utama : <input type="text" name="main_judul" id="main_judul"><br>
    Sub Judul : <input type="text" name="sub_judul" id="sub_judul"><br>
    Gambar : <input type="file" id="slide_gambar" name="slide_gambar"> <br>
    <input type="submit" name="submit" value="TAMBAH"><br>
    <label style="color:red" >TINGGI = 1920px <br>LEBAR = 920px</label><br>
</form>