<?php
require 'admin/function.php';
include 'header.php';
$index = query('SELECT * FROM departemen WHERE id_dept>0');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/HIMPRO-logo.png">
    <title>HIMPRO TEKNIK KIMIA UNNES</title>
</head>

<!-- Pake HTML --> 
<body>
    <section id="about" class="light-bg">
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="departemen_ga.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/HRD.png">
                                <h3>GA</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_hrd.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/HRD.png">
                                <h3>HRD</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_prc.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/PRC.png">
                                <h3>PRC</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_sed.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/SED.png">
                                <h3>SED</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_rnt.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/RnT.png">
                                <h3>RnT</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_std.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/STD.png">
                                <h3>STD</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_socdev.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/SOCDEV.png">
                                <h3>SOCDEV</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="departemen_techno.php" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/TECHNO.png">
                                <h3>TECHNO</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>
<!-- Pake HTML -->
<?php include 'footer.php'; ?>

</html> 