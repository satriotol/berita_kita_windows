<?php
    include "layout/header.php";
    require 'function.php';
    if(isset($_POST["submit"]))
        {
        if(tambah_video($_POST)>0){
                echo "
                <script>
                    alert ('Video berhasil ditambahkan!');
                    document.location.href ='list_video.php'
                </script>
                ";
        }else{
            echo "
            <script>
                alert ('video gagal ditambahkan!');
                document.location.href ='list_video.php'
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
    <h1>TAMBAH VIDEO</h1>
    <div class="edit-label">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_video">nama_video</label>
                <input type="text" id="nama_video" name="nama_video" 
                required placeholder="Your judul_sub..">
            <label for="link_video">link_video</label> <br>
                <input type="url" name="link_video" id="link_video" required placeholder="LINK VIDEO" >
            <input type="submit"name="submit" value="Tambah Video">
        </form>
    </div>
</form>
</div>

