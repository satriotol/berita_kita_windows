<?php
    //index.php
    $connect = mysqli_connect("localhost","root","","berita_kita");
    function make_query($connect)
    {
        $query = "SELECT * FROM slide_std ORDER BY id_slide ASC";
        $result = mysqli_query($connect, $query);
        return $result;
    }
    
    function make_slide_indicators($connect)
    {
        $output = ''; 
        $count = 0;
        $result = make_query($connect);
        while($row = mysqli_fetch_array($result))
        {
        if($count == 0)
        {
        $output .= '
        <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
        ';
        }
        else
        {
        $output .= '
        <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
        ';
        }
        $count = $count + 1;
        }
        return $output;
    }

    
    function make_slides($connect)
    {
        $output = '';
        $count = 0;
        $result = make_query($connect);
        while($row = mysqli_fetch_array($result))
        {
        if($count == 0)
        {
        $output .= '<div class="item active">';
        }
        else
        {
        $output .= '<div class="item">';
        }
        $output .= '
        <img src="upload/'.$row["slide_gambar"].'" alt="'.$row["main_judul"].'" />
        <div class="caption">
            <h2>'.$row["main_judul"].'</h2>
            <h3>'.$row["sub_judul"].'</h3>
        </div>
        </div>
        ';
        $count = $count + 1;
        }
        return $output;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/slide.css">
</head>

<body>
    <div class="container-baru">
        <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <?php echo make_slide_indicators($connect); ?>
            </ol> -->
            <div class="carousel-inner tulisan">
                <?php echo make_slides($connect); ?>
            </div>
            <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</body>

</html>