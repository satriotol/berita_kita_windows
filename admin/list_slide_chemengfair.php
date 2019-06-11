<?php
include "layout/header.php";
require 'function.php';
$slide_gbr = query("SELECT * FROM slide");
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <?php
    include "slide_chemengfair.php";
    ?>

</body>

</html>