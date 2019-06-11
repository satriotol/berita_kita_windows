<?php
include "layout/header.php";
require 'function.php';
    if(isset($_POST["tambah_kategori"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah_kategori($_POST)>0){
            echo "
            <script>
                alert ('kategori berhasil ditambahkan!');
                document.location.href ='list_kategori.php'
            </script>
            ";
        }else{
            echo "
            <script>
                alert ('kategori gagal ditambahkan!');
                document.location.href ='list_kategori.php'
            </script>
            ";
        }
    }
?>

<form method="post" action="">
<head>
    <link href="css/tambah.css"  rel="stylesheet">
</head>
    Nama Kategori : <input type="text" name="nama_kategori"> <br>
    <input type="submit" name="tambah_kategori" value="tambah">
</form>