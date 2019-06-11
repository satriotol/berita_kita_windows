<?php
session_start();

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

// include "layout/header.php";
require 'function.php';
if(isset($_POST["login"])){

    $user_admin = $_POST["user_admin"];
    $pass_admin = $_POST["pass_admin"];

    $result = mysqli_query($conn,"SELECT * FROM admin WHERE user_admin = '$user_admin'");

    //Cek Username
    if(mysqli_num_rows($result) === 1){

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass_admin,$row["pass_admin"])){
            $_SESSION["login"] = true;

            header ("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="form-container-wrapper">
        <div class="form-container">
            <form action="" method="post">
                <label for="">Username : </label>
                <br>
                <input type="text" name="user_admin" id="user_admin">
                <br>
                <label for="Password">Password :</label>
                <br>
                <input type="password" name="pass_admin" id="pass_admin">
                <br>
                <button type="submit" name="login">Login</button>
                <?php if(isset($error)) : ?>
                <br><br><label style="color:red;font-style:italic;">username / password salah</label>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>

</html>
</body>

</html>