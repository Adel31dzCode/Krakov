<?php

if (!isset($_COOKIE['us']) && !isset($_COOKIE['ps'])) {
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .hide {
    display: none !important;
    }
    .apperence {
    display: inline-block !important;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img_logo/full_icon_light.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/samer_style.css">
    <link rel="stylesheet" type="text/css" href="../bootraps_and font_awsome/css/all.min.css">
    <link rel="stylesheet" href="../bootraps_and font_awsome/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Krakov | Log in!</title>
</head>


<body class="bg vh-100 w-100 bg">

    <!-- Here Start The NavBar Section -->
    <a href="../index.php" class="light_logo"><img src="../img_logo/icon_logo_light.png" alt="Logo" class="logo"></a>
    <a href="../index.php" class="dark_logo"><img src="../img_logo/icon_logo_dark.png" alt="Logo" class="logo"></a>
    <!-- End Start The NavBar Section -->


    <!-- Start Section_image -->
    <section class="img_sec">
        <img src="img/need_hire.jpg" alt="Hire_me" class="img_global">
    </section>
    <!-- End Section_image -->

        <ul class="cont_listes">
          <li class="child_lst"><img src="img/moon.png" class="dark sma" alt="dd"> <img src="img/sun.png" class="light sma" alt=""></li>
          <li class="child_lst1"><a href="../"><img src="img/close.png" alt="Close Icon Press For Back"></a></li>
        </ul>

    <!-- Start Section_Form -->
    <section class="form_sec">
        <!-- <i class="fa-solid fa-x"></i> -->

            <div id="progress">
                <div id="first_prog" class="font_dr">1</div>
                <div id="line_prog"></div>
                <div id="second_prog" class="font_dr">2</div>
            </div>

            <form method="POST" id="form">
                <h1 id="login" class="font_dr">Login</h1>

                <div class="input-group mb-3 username_parent">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control email_inp username_inp" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
                </div>
                <p id="msg" class="font_dr" style="display: block;">Type Username</p>



                <div class="input-group mb-3 pass_parent">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control email_inp password_inp"  placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                </div>

                <div id="dash_level">
                    <button class="btn btn-primary" id="next">Next  <i class="fa-solid fa-angle-right"></i></button>
                    <button disabled class="btn btn-primary" id="back"><i class="fa-solid fa-angle-left"></i> Back</button>
                </div>

                <p id="if_dont_have" class="font_dr">You Don"t Have Account? <a href="">Regester</a></p>

            </form>
    </section>
    <!-- End Section_Form -->



    <script src="../bootraps_and font_awsome/js/all.min.js"></script>
    <script src="../bootraps_and font_awsome/js/bootstrap.bundle.min.js"></script>
    <script src="../js/sweetalert2@11.js"></script>
    <script src="main.js"></script>
</body>
</html>


<?php
} else {
    header("Location: ../index.php");
    exit();
}

require_once '../connect.php';


try {

    if (isset($_POST['username']) && isset($_POST['password'])) {

    
$username = $_POST['username'];
$password = $_POST['password'];

$checkSql = "SELECT * FROM user WHERE username = :username AND passwords = :passwords";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bindParam(':username', $username);
$checkStmt->bindParam(':passwords', $password);
$checkStmt->execute();

if ($checkStmt->rowCount() > 0) {
    $row = $checkStmt->fetch(PDO::FETCH_ASSOC);

    
    // يوجد اسم مستخدم وكلمة مرور متطابقة


    $us_encode = base64_encode($row['username']);
    setcookie('us', $us_encode, time() + (8640 * 300), "/");

    $ps_encode = base64_encode($row['passwords']);
    setcookie('ps', $ps_encode, time() + (8640 * 300), "/");

    echo '
    <script>
    Swal.fire({
        title: "successdly!",
        text: "Success, Welcome Back!",
        icon: "success"
      });
    </script>
    ';

    echo '<meta http-equiv="refresh" content="3">';




} else {
    // لا يوجد اسم مستخدم وكلمة مرور متطابقة
    echo '
    <script>
    Swal.fire({
        title: "Failed!",
        text: "Failed, Failed In Some Thing!",
        icon: "error"
      });
    </script>
    ';
}

}} catch (PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}



?>