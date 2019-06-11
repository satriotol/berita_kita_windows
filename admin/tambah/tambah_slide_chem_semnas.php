<?php
    include "../layout/header.php";
    require '../function.php';
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah_slide_gambar_semnas($_POST)>0){
            echo "
            <script>
                alert ('gambar berhasil ditambahkan!');
                document.location.href ='../list_slide_chem_semnas.php'
            </script>
            ";
        }else{
            echo "
            <script>
                alert ('gambar gagal ditambahkan!');
                document.location.href ='../list_slide_chem_semnas.php'
            </script>
            ";
        }
    }
    $query = "SELECT * FROM slide_semnas order by id_slide ASC";
    $result1 = mysqli_query($conn,$query);
?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Judul Utama : <input type="text" name="main_judul" id="main_judul"><br>
        Sub Judul : <input type="text" name="sub_judul" id="sub_judul"><br>
        Gambar : <input type="file" id="slide_gambar" name="slide_gambar"> <br>
        <input type="submit" name="submit" value="TAMBAH"><br>
        <label style="color:red">TINGGI = 1920px <br>LEBAR = 920px</label><br>
    </form>
</body>

</html>