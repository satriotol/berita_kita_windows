<?php
include "layout/header.php";
require 'function.php';
$id = $_GET["id"];
$ktgr = query("SELECT*FROM kategori WHERE id_kategori = $id")[0];
if(isset($_POST["tambah_kategori"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(ubah_kategori($_POST)>0){
        echo "
        <script>
            alert ('data berhasil diubah!');
            document.location.href ='list_kategori.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert ('data gagal diubah!');
            document.location.href ='list_kategori.php'
        </script>
        ";
    }
}
?>
<html>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id_kategori" value="<?= $ktgr["id_kategori"];?>">
        <label for="nama_kategori">Kategori</label>
            <input type="text" id="nama_kategori" name="nama_kategori" placeholder="masukan kategori.."
            value="<?=$ktgr["nama_kategori"];?>"> <br>
        <input type="submit" name="tambah_kategori" value="tambah">
    </ul>
</form>
</html>