<?php
include "layout/header.php";
require 'function.php';
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST)>0){
        echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href ='list_berita.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert ('data gagal ditambahkan!');
            document.location.href ='list_berita.php'
        </script>
        ";
    }
}
//menampilkan kategori
$query = "SELECT * FROM kategori order by nama_kategori ASC";
$result1 = mysqli_query($conn,$query);

?>

<head>
    <link href="css/tambah.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ckeditor.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post" enctype="multipart/form-data" onsubmit='addNewLines();'>
            <h1>FORM</h1>
            <h1>TAMBAH BERITA</h1>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    </ul>
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" placeholder="Your judul.." required>
                    <label for="tanggal_berita">Tanggal</label><br>
                    <input type="date" id="tanggal_berita" name="tanggal_berita" placeholder="Your Tanggal.."
                        style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"
                        required> <br>
                    <label for="kategori">Kategori</label><br>
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
                    <label for="isi">Isi</label> <br>
                    <textarea class="ckeditor" id="isi" name="isi" required></textarea>
                    <label for="gambar">Gambar</label> <br>
                    <input type="file" id="gambar" name="gambar" required>
                    <input type="submit" name="submit" value="Tambah Data!">
                </form>
            </div>
        </form>
    </div>
</body>