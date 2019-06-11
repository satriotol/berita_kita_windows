<?php
include "layout/header.php";
require 'function.php';
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah_subberita($_POST)>0){
        echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href ='list_subberita.php'
        </script>
        ";
    }
}
?>
<head>
    <link href="css/tambah.css"  rel="stylesheet">
</head>
<div class="container">
<form id="contact" action="" method="post" enctype="multipart/form-data">
    <h1>FORM</h1>
    <h1>TAMBAH BERITA</h1>
    <div class="edit-label">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="judul_sub">judul_sub</label>
                <input type="text" id="judul_sub" name="judul_sub" 
                required placeholder="Your judul_sub..">
            <label for="subjudul_sub">subjudul_sub</label>
                <input type="text" id="subjudul_sub" name="subjudul_sub" 
                required placeholder="Your subjudul_sub..">
            <label for="link_sub">link_sub</label> <br>
                <input type="url" id="link_sub" name="link_sub" 
                required placeholder="Your link_sub..">
            <input type="submit"name="submit" value="Tambah Data!">
        </form>
    </div>
</form>
</div>