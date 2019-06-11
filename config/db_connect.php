<?php
$conn = mysqli_connect("localhost","root","","berita_kita");

if($conn){
    echo"koneksi terhubung";
}else{
    echo "Database tidak ada";
}