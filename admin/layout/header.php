<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN HIMPROTEKIM UNNES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/animate.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.red-logout{
    background-color: red;
}
</style>

<body>
    <div class="topnav">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="list_berita.php">List Berita</a>
        <div class="dropdown">
            <button class="dropbtn">Slide
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="nav-link" href="list_slide.php">Home</a>
                <a class="nav-link" href="list_slide_article.php">Article</a>
                <a class="nav-link" href="list_slide_chemengfair.php">Chemengfair</a>
                <a class="nav-link" href="list_slide_departement.php">Departement</a>
            </div>
        </div>
        <a class="nav-link" href="list_admin.php">List Admin</a>
        <a class="nav-link" href="list_alumni.php">List Alumni</a>
        <a class="nav-link" href="list_subberita.php">List Sub Berita</a>
        <a class="nav-link" href="list_pesan.php">List Pesan</a>
        <a class="nav-link" href="list_video.php">List Video</a>
        <a style="float:right" class="red-logout" href="logout.php">LOGOUT</a>
    </div>
</body>

</html>

<script>
    $(".nav-link").each(function() {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('activeMenuItem');
        }
    });
</script>