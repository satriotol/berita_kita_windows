<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/csslistslide.css">
</head>

<body>

    <h2>Article Slide</h2>
    <div class="button_all">
        <a href="list_slide_article_press.php" class="button">PRESS RELEASE</a>
        <a href="list_slide_article_event.php" class="button">EVENT</a>
        <a href="list_slide_article_chemist.php" class="button">CHEMIST</a>
        <a href="list_slide_article_advokasi.php" class="button">ADVOKASI</a>
        <a href="list_slide_article_oprec.php" class="button">OPREC</a>
        <a href="list_slide_article_materi.php" class="button">MATERI</a>
        <a href="list_slide_article_cerc.php" class="button">CERC</a>
        <a href="list_slide_article_store.php" class="button">STORE</a>
    </div>

</body>

</html>
<script>
    $(".button").each(function() {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('active');
        }
    });
</script>