<?php
require '../function.php';
$id = $_GET["id"];

if(hapus_slide_materi($id)>0){
    echo "
        <script>
            alert ('data berhasil dihapus!');
            document.location.href ='../list_slide_article_materi.php'
        </script>
        ";
}else{
    echo "
    <script>
        alert ('data gagal dihapus!');
        document.location.href ='../list_slide_article_materi.php'
    </script>
    ";
}


?>