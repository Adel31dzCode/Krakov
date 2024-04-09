<?php require_once '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img_logo/full_icon_light.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/samer_style_n1.css">
    <link rel="stylesheet" type="text/css" href="../bootraps_and font_awsome/css/all.min.css">
    <link rel="stylesheet" href="../bootraps_and font_awsome/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <title>Search Employees | krakov</title>
</head>
<body class="bg">

    <!-- Here Start The NavBar Section -->


    <nav class="bg">

        <a href="../" class="light_on"><img class="logo" src="../img_logo/logo-light.png" alt="Logo_Light"></a>
        <a href="../" class="dark_on"><img class="logo" src="../img_logo/logo-dark.png" alt="Logo_Dark"></a>

        <a href="../" class="light_on_only"><img class="logo_only" src="../img_logo/full_icon_light.png" alt="Logo_Light"></a>
        <a href="../" class="dark_on_only"><img class="logo_only" src="../img_logo/full_icon_dark.png" alt="Logo_Dark"></a>

        <ul id="cantainer_ul">
            <a href="../"><il class="baby_list font">Home</i></il></a>
            <a href="../search-employess/"><il class="baby_list font right_now">Search Employees</il></a>
            <il style="position: relative;" class="baby_list font btn_mode" id="btn_md">Mode  <i class="fa-solid fa-chevron-down icon_list"></i>
            
            <div id="option_mode" class="bg">
                <ul>
                    <li class="list_mode top light_btn"> <img src="../img_logo/check.png" class="check_light">  Light</li>
                    <hr id="break">
                    <li class="list_mode bottom dark_btn"> <img src="../img_logo/check.png" class="check_dark">  Dark</li>
                </ul>
            </div>
            
            </il>


            
            
            <?php 
            if (isset($_COOKIE['us']) && isset($_COOKIE['ps'])) {


                $username = base64_decode($_COOKIE['us']);


                $sql_get = "SELECT * FROM user WHERE username = :username";
                $stmt_data = $conn->prepare($sql_get);
                $stmt_data->bindParam(':username', $username);
                $stmt_data->execute();

                $row = $stmt_data->fetch(PDO::FETCH_ASSOC);
                
                $country = $row['country'];
                $skills = $row['skills'];
                $email = $row['email'];
                $password = $row['passwords'];
                $photo_profile = $row['img_url'];
                $date_regester = $row['date_regester'];
                $description = $row['descriptions'];
                $stat = $row['stat_desc'];
                $gender = $row['gender'];


            echo '
            <li class="notification"><i class="fa-solid fa-bell font" style="color: var(--color)" id="icon_for_js"></i>
                <div id="menu_not" class="bg">
                    <p id="big" class="font">Empty</p>
                    <img src="../img_logo/empty-box.png" alt="No_thing" id="empty_doc" class="font">
                </div>    
            </li>
            <li class="baby_list_sp logged_list" id="lister">
                <img src="../profile/uploads_img/' . $photo_profile . '" alt="Profile_photo" id="profile_photo" class="marg_bt"/>
                <span id="for_media_nav">
                    <p id="username" class="font">' .  base64_decode($_COOKIE['us']) . '</p>
                    <i class="fa-solid fa-sort-down pr_icon font" id="ic"></i>
                </span>
                <div id="profile_opt" class="bg">
                    <ul>
                        <a href="../profile/"><li class="profile_list_opt font top_pr"><i class="fa-regular fa-user"></i>   Profile</li></a>
                        <hr id="hr_in_profile">
                        <a href="../profile/"><li class="profile_list_opt font top_bt"><i class="fa-regular fa-bookmark alones"></i>   Deals</li></a>
                        <hr id="hr_in_profile">
                        <a href=""><li class="profile_list_opt font out top_md log_out"><i class="fa-solid fa-arrow-right-from-bracket"></i>   Log Out </li></a>
                    </ul>
                </div>
                <div id="tahari_for_menu"></div>
            </li>
            
            ';
            } else {
            echo '<il class="baby_list font log set_log_dark"><a href="/hire_web/log_in/"><span class="login font set_log_dark">Log in  </span></a><a href="/hire_web/regester/"><span class="sign font">Sign in</span></a>';
            }
            
        ?>


        </ul>

        <div id="burger_menu">
            <img class="line_top mecanic" src="../img_logo/wrench.png">
            <img class="line_middle mecanic" src="../img_logo/screwdriver.png">
        </div>

    </nav>


<!-- End Start The NavBar Section -->

    <header>
        <p id="tittle">Search Employees</p>
    </header>

    <div id="stick">
        <form method="POST">
            <div id="hanging_portrait">

                <input type="text" name="search" placeholder="Search For A Employees" id="search" />
                <button type="button" id="btn_search"><i class="fa-solid fa-search src_icon"></i></button>

            </div>
            
            <div class="flex">

                    <div class="flex temporitly-trick">
                        <span class="ms-md-4 me-md-4">
                            <input class="form-check-input" type="radio" name="filter" value="default" id="flexRadioDefault3" checked>
                            <label for="flexRadioDefault3" style="color: var(--color)">Default</label>
                        </span>
                        <span class="me-md-4">
                            <input class="form-check-input" type="radio" name="filter" value="freelance" id="flexRadioDefault">
                            <label for="flexRadioDefault" style="color: var(--color)">Freelance</label>
                        </span>
                    </div>
                    <div class="flex temporitly-trick">
                        <span class="me-md-4">
                            <input class="form-check-input" type="radio" name="filter" value="full-time" id="flexRadioDefault1">
                            <label for="flexRadioDefault1" style="color: var(--color)">Full-Time</label>
                        </span>
                        <span class="me-md-4">
                            <input class="form-check-input" type="radio" name="filter" value="part-time" id="flexRadioDefault2">
                            <label for="flexRadioDefault2" style="color: var(--color)">Part-Time</label>
                        </span>
                    </div>
            </div>
        </form>
    </div>


    <section id="continer_result">
        <h1 class="tit">Best Result Founded!</h1>
        <div id="offer_continer">


        <?php 

try {
    $is_unique_bg = false;
    $sql_search = 'SELECT * FROM request_job ORDER BY RAND() LIMIT 12';
    $stmt_search = $conn->prepare($sql_search);
    $stmt_search->execute();
    
    $rows = $stmt_search->fetchAll(PDO::FETCH_ASSOC);
    
    // عرض النتائج الوحيدة أو التحقق مما إذا كانت هناك نتائج

    
        # code...
    if (!empty($rows)) {
        foreach ($rows as $row) {



            $sql_info = "SELECT * FROM user WHERE username = :user_name";
            $stmt_info = $conn->prepare($sql_info);
            $stmt_info->bindParam(':user_name', $row['user_request']);
            $stmt_info->execute();
            $row_info = $stmt_info->fetch(PDO::FETCH_ASSOC);

            $country_data = $row_info['country'];
            $skills_data = $row_info['skills'];
            $photo_profile_img = $row_info['img_url'];
            $email_data = $row_info['email'];


            echo '<article class="offer ' . ($is_unique_bg ? 'style_gr' : '') . '">';
            echo '<div class="flex1">';
            echo '<img src="../profile/uploads_img/'. $photo_profile_img .'" alt="" class="img_worker">';
            echo '<p class="tittle_desc ms-md-3">' . $row['title'] . '</p>';
            echo '</div>';
            echo '<div class="ms-2 flx_med">';
            echo '<div class="flex_centry">';
            echo '<p class="username"><i class="fa-solid fa-user"></i>  ' . $row['user_request'] . '</p>';
            echo '<p class="date"><i class="fa-regular fa-calendar-days"></i>  ' . date('d F Y', strtotime($row['date_now'])) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="ms-2 flx_med">';
            echo '<div class="flex_centry">';
            echo '<p class="place"><i class="fa-solid fa-location-dot"></i>  '. $country_data .'</p>';
            echo '<p class="email_elipc" title="'.$email_data.'"><i class="fa-solid fa-envelope"></i>  '. $email_data .'</p>';
            echo '</div>';
            echo '</div class="ms-2 flx_med">';
            echo '<div class="flex_centry">';
            echo '<p class="job">' . $skills_data . '</p>';
            echo '<p class="kind_work">' . $row['kind_request'] . '</p>';
            echo '</div>';
            echo '<button class="btn btn-primary ms-2 me-2" type="submit">Contact</button>';
            echo '<i class="fa-regular fa-bookmark"></i>';
            echo '</article>';
            $is_unique_bg = !$is_unique_bg;

            echo '<hr class="comma">';
        }

        echo '<button class="btn btn-primary btn_centring foreach_btns">Show More +</button>';

    } else {
        // لا توجد نتائج
        echo '<p>No results found.</p>';
    }


} catch (PDOException $e) {
    // إرجاع الخطأ كتنسيق JSON
    echo 'Connection failed: ' . $e->getMessage();
}


        
        ?>

        </div>
    </section>


    <div id="submit_self">
        <span>Submit A Job</span> <i class="fa-solid fa-plus"></i>
    </div>

    <div id="all_request">
    </div>

        <div id="submit_request">
            <form id="instead" method="POST">
                <i class="fa-solid fa-x" id="click_icon" onclick="func()"></i>
                <h1 class="text-center mt-4 mb-md-5 mb-sm-4 font">Request Job</h1>


                <div id="parent_inp">
                    <input type="text" name="title" id="tittle_inp" required="required">
                    <span id="label_tittle">Tittle</span>
                </div>

                <p class="text mb-4 msg_title">Please, Type The Tittle Of Your Sevice</p>

                <div class="flex spc_flx mb-4">

                    <span class="ms-md-4 me-4">
                        <input class="form-check-input" type="radio" name="filter_form" value="default" id="for_default" checked>
                        <label for="for_default" class="font">Default</label>
                    </span>
                    <span class="me-4">
                        <input class="form-check-input" type="radio" name="filter_form" value="freelance" id="for_freelance">
                        <label for="for_freelance" class="font">Freelance</label>
                    </span>
                    <span class="me-4">
                        <input class="form-check-input" type="radio" name="filter_form" value="full-time" id="for_fulltime">
                        <label for="for_fulltime" class="font">Full-Time</label>
                    </span>
                    <span class="me-4">
                        <input class="form-check-input" type="radio" name="filter_form" value="part-time" id="for_parttime">
                        <label for="for_parttime" class="font">Part-Time</label>
                    </span>

                </div>

                <p id="info">You Skills, Position And Your Information You Typed Before Will Show To <br style="display: none" class="d-md-none"> You Can Change Them In Profile</p>
                
                <input type="button" class="btn btn-primary mt-4" id="send_request" name="send_request" value="Submit">
            </form>
        </div>




    <div id="tahari_for_not"></div>
    <div id="tahari_for_nav"></div>


    <script src="../bootraps_and font_awsome/js/all.min.js"></script>
    <script src="../bootraps_and font_awsome/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script_of_sammer1.js"></script>
    <script src="main.js"></script>
    <script src="../js/sweetalert2@11.js"></script>
</body>
</html>