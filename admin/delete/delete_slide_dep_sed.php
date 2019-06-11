<?php
require '../function.php';
$id = $_GET["id"];

if(hapus_slide_sed($id)>0){
    echo "
        <script>
            alert ('data berhasil dihapus!');
            document.location.href ='../list_slide_dep_sed.php'
        </script>
        ";
}else{
    echo "
    <script>
        alert ('data gagal dihapus!');
        document.location.href ='../list_slide_dep_sed.php'
    </script>
    ";
}


?>