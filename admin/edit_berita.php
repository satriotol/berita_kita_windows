<?php
    include "layout/header.php";
    require 'function.php';
    $id = $_GET["id"];
    $brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori  WHERE berita.id = $id")[0];
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(ubah($_POST)>0){
            echo "
            <script>
                alert ('data berhasil diubah!');
                document.location.href ='list_berita.php'
            </script>
            ";
        }else{
            echo "
            <script>
                alert ('data gagal diubah!');
                document.location.href ='list_berita.php'
            </script>
            ";
        }
    } 
    //menampilkan kategori
    $query = "SELECT * FROM kategori order by nama_kategori ASC";
    $result1 = mysqli_query($conn,$query);
?>
<html>

<head>
    <link rel="stylesheet" href="css/edit_berita.css">
    <meta name="viewport" content="user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ckeditor.css">
    <link href="css/tambah.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
            <h1>FORM</h1>
            <h1>EDIT BERITA</h1>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $brt["id"];?>">
                    <input type="hidden" name="gambarLama" value="<?= $brt["gambar"];?>">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" placeholder="masukan judul.."
                        value="<?=$brt["judul"];?>">
                    <br>
                    <label for="kategori">Kategori Berita</label>
                    <select required id="kategori" name="kategori">
                        <option value="">Pilih Kategori</option>
                        <optgroup label="Article">
                            <option value="PRESS RELEASE">PRESS RELEASE</option>
                            <option value="EVENT">EVENT</option>
                            <option value="CHEMIST">CHEMIST</option>
                            <option value="ADVOKASI">ADVOKASI</option>
                            <option value="OPREC">OPREC</option>
                            <option value="MATERI">MATERI</option>
                            <option value="CERC">CERC</option>
                            <option value="STORE">STORE</option>
                        </optgroup>
                        <optgroup label="Chemengfair">
                            <option value="SEMINAR NASIONAL">SEMINAR NASIONAL</option>
                            <option value="ISO">ISO</option>
                            <option value="CESA">CESA</option>
                            <option value="S2C">S2C</option>
                            <option value="CEPTION">CEPTION</option>
                            <option value="CHEMENG AWARD">CHEMENG AWARD</option>
                        </optgroup>
                        <optgroup label="Departemen">
                            <option value="GA">GA</option>
                            <option value="HRD">HRD</option>
                            <option value="PRC">PRC</option>
                            <option value="SED">SED</option>
                            <option value="Rnt">Rnt</option>
                            <option value="STD">STD</option>
                            <option value="SOCDEV">SOCDEV</option>
                            <option value="TECHNO">TECHNO</option>
                        </optgroup>
                        <optgroup label="Lain-Lain">
                            <option value="Lain-Lain">Lain-Lain</option>
                        </optgroup>
                    </select>
                    <p name="isi" id=""><?php echo $brt["isi"]?></p><br>
                    <label for="isi" id="isi">Isi Berita</label> <br>
                    <div class="isi-berita-textarea">
                        <textarea class="ckeditor" id="isi" name="isi" required></textarea>
                    </div>
                    <label for="gambar">Gambar Berita</label>
                    <input type="file" id="gambar" name="gambar"> <br>
                    <img src="../upload/<?=$brt ['gambar'];?>" width="40"> <br>
                    <input type="submit" name="submit" value="Ubah Data!">
                </form>
            </div>
    </div>
</body>

</html>