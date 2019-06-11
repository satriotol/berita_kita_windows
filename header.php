<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/baru.css" rel="stylesheet">
    <link rel="stylesheet" href="css/baru-responsive.css" media="screen and (max-width: 768px)">    <!-- Javascript for custom animation -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/animate.js"></script>
	<title>HIMPRO TEKNIK KIMIA UNNES | KABINET PRESTASI</title>
	<link rel="shortcut icon" href="images/HIMPRO-logo.png" type="image/png">
</head>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #1295C9; background-blend-mode: color; border: none">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" onclick="switchdropdown()">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php"><img src="images/HIMPRO-logo.png" alt="Himprotekkim" height="60px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-parent=".container">
            <ul class="nav navbar-nav navbar-right" id="hidden-navbar">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="index.php">Home</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="menu_article.php">Article</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="menu_chemengfair.php">Chemengfair</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="isi_data_alumni.php" target="_blank">Alumni</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" style="color: white" href="aboutus.php">About</a>
                    <div class="dropdown-content" style="background-color: #1295C9">
                        <a class="nav-link" style="color: white" href="menu_kabinet.php">Kabinet</a>
                        <a class="nav-link" style="color: white" href="menu_departemen.php">Departemen</a>
                        <a class="nav-link" style="color: white" href="http://tekkim.unnes.ac.id" target="_blank">Jurusan</a>
                        <a class="nav-link" style="color: white" href="kontak_kami.php">Kontak</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" data-parent=".container">
            <ul class="nav navbar-nav navbar-right" id="hidden-navbar">
                <li>
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="aboutus.php">Kabinet</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="menu_departemen.php">Departemen</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="http://tekkim.unnes.ac.id" target="_blank">Jurusan</a>
                </li>
                <li>
                    <a class="nav-link" style="color: white" href="index.php#contact-us">Kontak</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<script>
    $(".nav-link").each(function() {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('activeMenuItem');
        }
    });

    function switchdropdown() {
        if ($("#bs-example-navbar-collapse-1").is(':hidden')) {
            $("#bs-example-navbar-collapse-2").css("visibility", "visible");
        }
        if ($("#bs-example-navbar-collapse-2").is(':visible')) {
            $("#bs-example-navbar-collapse-2").css("visibility", "hidden");
        }
    }
    
    $(document).ready(function () {
        $('#bs-example-navbar-collapse-2').css("visibility", "hidden");
    });
</script> 