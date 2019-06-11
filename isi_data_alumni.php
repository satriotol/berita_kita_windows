<?php
    require 'admin/function.php';
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah_alumni($_POST)>0) {
            echo "
            <script>
                alert ('data berhasil ditambahkan!');
                document.location.href ='index.php'
            </script>
            ";
        }
        else {
            echo "
            <script>
                alert ('data gagal ditambahkan!');
                document.location.href ='index.php'
            </script>
            ";
        }
    }
?>

<head>
    <title>ISI DATA ALUMNI</title>
    <link href="css/tambah.css"  rel="stylesheet">
</head>

<div class="container">
    <form id="contact" action="" method="post" enctype="multipart/form-data" onsubmit='addNewLines();'>
        <h1>FORM</h1>
        <h1>DATA ALUMNI TEKNIK KIMIA UNNES</h1>
        <p style="color:red;">* wajib</p>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap<label style="color:red;">*</label></label>
                    <input required type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap..">
                
                <label for="email">E-mail<label style="color:red;">*</label></label>
                    <input required type="text" id="email" name="email" placeholder="E-mail..">
                
                <label for="alamat_sekarang">Alamat Sekarang<label style="color:red;">*</label></label>
                    <input required type="text" id="alamat_sekarang" name="alamat_sekarang" placeholder="Alamat Sekarang..">
                
                <label for="nomer_telepon">Nomer Telepon</label>
                    <input type="text" id="nomer_telepon" name="nomer_telepon" placeholder="Nomer Telepon..">
                
                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                    <input type="text" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Perusahaan..">
                
                <label for="jenjang">Angkatan/Jenjang S1/D3</label>
                    <input type="text" id="jenjang" name="jenjang" placeholder="Angkatan/Jenjang S1/D3..">
                
                <input type="submit"name="submit" value="Tambah Data!">
            </form>
        </div>
    </form>
</div>