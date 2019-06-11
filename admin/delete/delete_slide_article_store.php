<?php
require '../function.php';
$id = $_GET["id"];

if(hapus_slide_store($id)>0){
    echo "
        <script>
            alert ('data berhasil dihapus!');
            document.location.href ='../list_slide_article_store.php'
        </script>
        ";
}else{
    echo "
    <script>
        alert ('data gagal dihapus!');
        document.location.href ='../list_slide_article_store.php'
    </script>
    ";
}


?>