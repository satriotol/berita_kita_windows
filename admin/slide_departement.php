<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/csslistslide.css">
</head>

<body>

    <h2>Departement Slide</h2>
    <div class="button_all">
        <a href="list_slide_dep_ga.php" class="button">GA</a>
        <a href="list_slide_dep_hrd.php" class="button">HRD</a>
        <a href="list_slide_dep_prc.php" class="button">PRC</a>
        <a href="list_slide_dep_sed.php" class="button">SED</a>
        <a href="list_slide_dep_rnt.php" class="button">RNT</a>
        <a href="list_slide_dep_std.php" class="button">STD</a>
        <a href="list_slide_dep_socdev.php" class="button">SOCDEV</a>
        <a href="list_slide_dep_techno.php" class="button">TECHNO</a>
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