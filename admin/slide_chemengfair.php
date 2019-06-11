<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/csslistslide.css">
<body>

    <h2>Chemengfair Slide</h2>
    <div class="button_all">
        <a href="list_slide_chem_semnas.php" class="button">SEMINAR NASIONAL</a>
        <a href="list_slide_chem_iso.php" class="button">ISO</a>
        <a href="list_slide_chem_cesa.php" class="button">CESA</a>
        <a href="list_slide_chem_s2c.php" class="button">S2C</a>
        <a href="list_slide_chem_ception.php" class="button">CEPTION</a>
        <a href="list_slide_chem_ma.php" class="button">CHEMENG AWARDS</a>
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