<?php
require '../function.php';
$id = $_GET["id"];

if(hapus_slide($id)>0){
    echo "
        <script>
            alert ('data berhasil dihapus!');
            document.location.href ='../list_slide.php'
        </script>
        ";
}else{
    echo "
    <script>
        alert ('data gagal dihapus!');
        document.location.href ='../list_slide.php'
    </script>
    ";
}


?>