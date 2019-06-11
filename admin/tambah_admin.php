<?php
include "layout/header.php";
require 'function.php';
    if(isset($_POST["Register"])){
        if(tambah_admin($_POST)>0){
            echo "<script>
                alert ('admin berhasil ditambahkan!');
            </script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>
<html>
<form method="post" action="">
<head>
    <link href="css/tambah.css"  rel="stylesheet">
</head>
    Username : <input required type="text" name="user_admin" id="user_admin"> <br>
    Password :<br><input required type="password" name="pass_admin" id="pass_admin" 
    style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"> <br>
    Konfirmasi Password :<br><input required type="password" name="pass_admin2" id="pass_admin2"
    style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"> <br>
    <input type="submit" name="Register" value="tambah"> 
</form>
</html>
