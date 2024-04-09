<?php 

if (!isset($_COOKIE['us']) && !isset($_COOKIE['ps'])) {
    header('Location: ../');
    exit();
}

require_once '../connect.php';

$username = base64_decode($_COOKIE['us']);




try {
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



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img_logo/full_icon_light.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../bootraps_and font_awsome/css/all.min.css">
    <link rel="stylesheet" href="../bootraps_and font_awsome/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/samer_style_n1.css">
    <link rel="stylesheet" href="style_8.css">
    <style>
        .hover_cls {
            background-color: #28282d !important;
        }
    </style>
    <title>Krakov | Profile</title>
</head>
<body>


    <!-- Here Start The NavBar Section -->


    <nav class="bg">

    <button id="barger_tittle"><i class="fa-solid fa-ellipsis font"></i></button>

        <a href="../" class="light_on"><img class="logo" src="../img_logo/logo-light.png" alt="Logo_Light"></a>
        <a href="../" class="dark_on"><img class="logo" src="../img_logo/logo-dark.png" alt="Logo_Dark"></a>

        <a href="../" class="light_on_only"><img class="logo_only" src="../img_logo/full_icon_light.png" alt="Logo_Light"></a>
        <a href="../" class="dark_on_only"><img class="logo_only" src="../img_logo/full_icon_dark.png" alt="Logo_Dark"></a>

        <ul id="cantainer_ul">
            <a href="../"><il class="baby_list font">Home</i></il></a>
            <a href="../search-employess/"><il class="baby_list font">Search Employees</il></a>
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
            <li class="notification"><i class="fa-solid fa-bell font" id="icon_for_js"></i>
                <div id="menu_not" class="bg">
                    <p id="big" class="font">Empty</p>
                    <img src="../img_logo/empty-box.png" alt="No_thing" id="empty_doc" class="font">
                </div>    
            </li>
            <li class="baby_list_sp logged_list" id="lister">
                <img src="uploads_img/' . $photo_profile . '" alt="Profile_photo" id="profile_photo" class="marg_bt"/>
                <span id="for_media_nav">
                    <p id="username" class="font">' .  base64_decode($_COOKIE['us']) . '</p>
                    <i class="fa-solid fa-sort-down pr_icon font" id="ic"></i>
                </span>
                <div id="profile_opt" class="bg">
                    <ul>
                        <a href=""><li class="profile_list_opt font top_pr"><i class="fa-regular fa-user"></i>   Profile</li></a>
                        <hr id="hr_in_profile">
                        <a href=""><li class="profile_list_opt font top_bt"><i class="fa-regular fa-bookmark"></i>   Deals</li></a>
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


    <div id="tittles">
        <i class="fa-solid fa-x d-md-none font"></i>
        <ul id="clasifinment">
            <li id="tittle_list">User Settings</li> <!-- tittle -->

            <li class="title main current">Main</li>
            <li class="title frnd_requ">Friend Request</li>
            <li class="title desc">Description Account</li>
            <li class="title gend">Gender</li>

            <li id="tittle_list">Security Settings</li> <!-- tittle -->

            <li class="title sec_set">Security & Protection</li>

            <li id="tittle_list">Advance Settings</li> <!-- tittle -->

            <li class="title fut_feat">Futures Features</li>
            <li class="title sav">Saved</li>
            <li class="title cont">Contact Developer</li>
        </ul>
    </div>

    <div id="operation_position">

        <section id="for_main" class="sections">
            <form method="POST" enctype="multipart/form-data">
                <h1 class="big_ttl">Main</h1>
                <div id="pr_ver">
                    <div id="fle">

                        <div id="continer_lean" title="Upload Photo Profile">
                            <img id="profile_photo_local" src="uploads_img/<?php echo $photo_profile; ?>" alt="profile_photo_local">
                            <div id="cover"><input type="file" name="photo" id="file" multiple accept="image/*" onchange="displaySelectedImage(this)"><i class="fa-solid fa-upload"></i></div>
                        </div>
                        <p class="bug"></p>

                        <div>
                            <p id="username"><?php echo $username; ?></p>
                            <p id="skill"><?php echo date('Y-m-d', strtotime($date_regester)); ?></p>
                        </div>

                    </div>

                    <a href="google.com" id="new_year"  style="text-decoration: none !important;"><button class="button-86_" role="button">Modify</button></a>
                </div>
                <p id="msg_photo">You Can Change Your Photo Profile Pressing In The Photo</p>
                <button class="button-86" role="submit" name="submiter">Save</button>
            </form>
            <form method="POST">
                <div id="inp_continer">
                        <div class="input-group mb-1 parent_inp">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control username_inp" placeholder="Username" aria-label="Username" value="<?php echo $username; ?>" aria-describedby="basic-addon1" name="username">
                        </div>
                            <p id="msg_username" class="mb-2 msges">Change Your Username Here!</p>

                        <div class="input-group mb-1 parent_inp">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control email_inp" placeholder="Email" aria-label="email" value="<?php echo $email; ?>" aria-describedby="basic-addon1" name="email">
                        </div>
                            <p id="msg_email" class="mb-2 msges">Change Your Email Here!</p>


                        <div class="input-group mb-1 parent_inp">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <input type="text" class="form-control skills_inp" placeholder="Skill(s)" aria-label="skills" value="<?php echo $skills; ?>" aria-describedby="basic-addon1" name="skills">
                        </div>


                            <p id="msg_skills" class="mb-2 msges">Change Your Skills Here!</p>

                            <div class="input-group mb-1 parent_inp">
                                <div style="position: relative;">
                                <select id="country" name="country" class="form-control cont_inp">
    <option value="" disabled>Select Country:</option>
    <?php
    $countries = array(
        "Palastine", "Afghanistan", "Åland Islands", "Albania", "Algeria", "American Samoa", "Andorra", "Angola",
        "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan",
        "Bolivia", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
        "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde",
        "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands",
        "Colombia", "Comoros", "Congo", "Congo, The Democratic Republic of The", "Cook Islands", "Costa Rica", "Cote D'ivoire",
        "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador",
        "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)",
        "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories",
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe",
        "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-bissau", "Guyana", "Haiti", "Heard Island and Mcdonald Islands",
        "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran, Islamic Republic of",
        "Iraq", "Ireland", "Isle of Man", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati",
        "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic",
        "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao",
        "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
        "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of",
        "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia",
        "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria",
        "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestinian Territory, Occupied",
        "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar",
        "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia",
        "Saint Pierre and Miquelon", "Saint Vincent and The Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
        "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
        "Somalia", "South Africa", "South Georgia and The South Sandwich Islands", "Spain", "Sri Lanka", "Sudan", "Suriname",
        "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan",
        "Tanzania, United Republic of", "Thailand", "Timor-leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia",
        "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
        "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Viet Nam",
        "Virgin Islands, British", "Virgin Islands, U.S.", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe"
    );
    foreach ($countries as $c) {
        $selected = ($c == $country) ? 'selected' : '';
        echo "<option value=\"$c\" $selected>$c</option>";
    }
    ?>
</select>

                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>

                            <p id="msg_username" class="mb-2 msges">Change Your Country Here!</p>

                <button type="submit" id="sub_info_preso"  class="button-86_" name="photo_submit" role="submit">Save</button>
            </div>
        </form>
        </section>

        <section id="for_friend" class="sections">

            <h1 class="big_ttl">Friend Request</h1>

            <div id="inbox">
                <p id="big_txt">No Requests</p>
                <img src="img/request.png" alt="No_requests">
            </div>

        </section>

        <section id="for_describe" class="sections">

            <h1 class="big_ttl">Describe Account</h1>
            <p id="info">You Can Save Information Here Or Describe Your Self Here</p>
            <form method="POST">
                <div class="form-floating" id="txt_ar">
                    <textarea class="form-control" placeholder="Leave a comment here" name="describe" id="floatingTextarea2" style="height: 100px"><?php echo $description; ?></textarea>
                    
                    <div id="flex">

                        <div class="form-check form_another">
                            <input class="form-check-input radio_inp" type="radio" name="stat" value="puplic" id="flexRadioDefault1" <?php echo $stat === 'puplic' ? 'checked' : ''; ?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                              Puplic
                            </label>
                        </div>
                        <div class="form-check form_another">
                            <input class="form-check-input radio_inp" type="radio" name="stat" value="personal" id="flexRadioDefault2" <?php echo $stat === 'personal' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Personal
                            </label>
                          </div>

                    </div>

                    <label for="floatingTextarea2" class="font">Description</label>
                </div>

                <button class="button-86" name="desc_sub" role="submit">Save</button>
            </form>
        </section>

        <section id="for_gender" class="sections">
            <h1 class="big_ttl big_tt_gender">Gender Of User</h1>
            <p id="info">Note: Default Value Is Nothing So Choose Now Please.</p>
            <p id="info">Please Choose The Right Option Below:</p>

            <form method="POST">

                <div id="flex" class="pad">

                    <span class="gender_opt" style="display: flex; align-items:center; justify-content: center;">
                        <input type="radio" id="male" name="gender" value="male" <?php echo $gender === 'male' ? 'checked' : '' ; ?>>
                        <label for="male" id="lb_male">Male</label>
                    </span>
                    <span class="gender_opt" style="display: flex; align-items:center; justify-content: center;">
                        <input type="radio" id="female" name="gender" value="female" <?php echo $gender === 'female' ? 'checked' : '' ; ?>>
                        <label for="female" id="lb_female">Female</label>
                    </span>

                </div>

                <p class="text-center">Choose Your Gender:</p>

                <button class="button-86" id="margin_media" name="sub_gender" role="submit">Save</button>

            </form>

        </section>

        <section id="for_security" class="sections">

            <h1 class="big_ttl">Security And Privicy</h1>

            <form method="get">

                <div class="form-check form-switch">
                    <input class="form-check-input inp_check" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="security1" value="on" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">Activite Protection Setting</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input inp_check" type="checkbox" role="switch" id="flexSwitchCheckDefault1" name="security2" value="on" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault1">Activite Security Account Setting</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input inp_check" type="checkbox" role="switch" id="flexSwitchCheckDefault2" name="security3" value="on" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault2">Activite Puplic Default Tools Protect</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input inp_check" type="checkbox" role="switch" id="flexSwitchCheckDefault3" name="security4" value="on" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault3">Ignore Suspicious Account</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input inp_check" type="checkbox" role="switch" id="flexSwitchCheckDefault4" name="security5" value="on" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault4">Activite Protection Setting</label>
                </div>

                <button class="button-86" id="media_space" role="submit">Save</button>

            </form>

        </section>

        <section id="for_features" class="sections">

            <h1 class="big_ttl">Features Will Comming Soon In Future</h1>

            <p id="info">Very Much Updates Will Be In Krakov In Future Just Support And I really Appreciate that!</p>

        </section>

        <section id="for_saved" class="sections">

            <h1 class="big_ttl">Saved Deals</h1>

            <p id="info">You Can Save Deals And You Will Find Them Here</p>

        </section>

        <section id="for_contact" class="sections">

            <h1 class="big_ttl">Contact And Tracking Developer</h1>

            <h2 id="desiner">Div is <span id="unique"><span id="dsn"></span></span></h2>

            <h2 id="desiner" class="media_spc">Contact Me In</h2>
            <div id="divider">
                <a href="https://www.instagram.com/adel31_dz/" class="lnk" target="_blank" rel="noopener noreferrer"><button class="button-86_in" role="submit">Instagram</button></a>
                <a href="https://www.facebook.com/profile.php?id=100050885281353&ref=xav_ig_profile_web" class="lnk" target="_blank" rel="noopener noreferrer"><button class="button-86_fa" role="submit">Facebook</button></a>
                <a href="https://www.youtube.com/@Premium-Code-By_Adel31_dz" class="lnk" target="_blank" rel="noopener noreferrer"><button class="button-86_yo" role="submit">Youtube</button></a>
            </div>
            <h2 id="desiner">Be Sure That I Will Reply To You</h2>
        </section>

    </div>

    <div id="tahari_for_not"></div>
    <div id="tahari_for_nav"></div>



    <script src="../js/sweetalert2@11.js"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>

    <script src="../bootraps_and font_awsome/js/bootstrap.bundle.min.js"></script>




    <script src="../js/script_of_sammer1.js"></script>
    <script src="main8.js"></script>

</body>
</html>
<?php




} catch (PDOException $e) {
    echo "Failed Error->" . $e->getMessage();
}

// Updating Photo Profile Of User Start

if (isset($_POST['submiter']) && isset($_FILES['photo'])) {

    $img_name = $_FILES['photo']['name'];
    $img_tmp = $_FILES['photo']['tmp_name'];
    $img_size = $_FILES['photo']['size'];
    $img_type= $_FILES['photo']['type'];
    $img_error = $_FILES['photo']['error'];

    if ($img_error === 0) {
        if ($img_size > 5000000) {
            echo '
                <script>Swal.fire({
                    title: "Failed!",
                    text: "Failed, You File \'s Too Large!",
                    icon: "error"
                });</script>
            ';
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads_img/' . $new_img_name;
                move_uploaded_file($img_tmp, $img_upload_path);
                
                // Inserting To Data Base Using PDO

                $sql_update_img = "UPDATE user SET img_url = :name_img WHERE username = :user_name";
                $stmt_update_img = $conn->prepare($sql_update_img);
                $stmt_update_img->bindParam(':name_img', $new_img_name);
                $stmt_update_img->bindParam(':user_name', $username);
                $stmt_update_img->execute();

                echo '
                <script>
                Swal.fire({
                    title: "Successfly!",
                    text: "Success, Your Photo Has Saved!",
                    icon: "success"
                  });
                </script>
                ';

                echo '<meta http-equiv="refresh" content="3">';

            } else {
                echo '
                <script>Swal.fire({
                    title: "Failed!",
                    text: "Failed, The Type Of Your Photo Is Not Allowed!",
                    icon: "error"
                });</script>
            ';
            }
        }
    } else {
        echo '
                <script>Swal.fire({
                    title: "Failed!",
                    text: "Failed, Error In Send Data, Please Try Later!",
                    icon: "error"
                });</script>
            ';
    }

}

// Updating Photo Profile Of User End



// Updating Information Of User Start

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['skills']) && isset($_POST['country']) && isset($_POST['photo_submit'])) {

$username_inp = $_POST['username'];
$country_inp = $_POST['country'];
$skills_inp = $_POST['skills'];
$email_inp = $_POST['email'];


$update_sql = "UPDATE user SET username = :username_new, country = :country, skills = :skills, email = :email WHERE username = :username_where";
$stmt_update = $conn->prepare($update_sql);

// استبدال القيم في الاستعلام المعد
$stmt_update->bindParam(':country', $country_inp);
$stmt_update->bindParam(':skills', $skills_inp);
$stmt_update->bindParam(':email', $email_inp);
$stmt_update->bindParam(':username_new', $username_inp);
$stmt_update->bindParam(':username_where', $username);

// تنفيذ الاستعلام
$stmt_update->execute();

echo '
    <script>
        Swal.fire({
            title: "Successfly!",
            text: "Success, Information Saved Successfly!",
            icon: "success"
        });
    </script>
';

echo '<meta http-equiv="refresh" content="3">';

}
// Updating Information Of User End


// Saving Description Of User Start

if (isset($_POST['desc_sub']) && isset($_POST['describe']) && isset($_POST['stat'])) {

$description_value = $_POST['describe'];
$stat_of_desc = $_POST['stat'];

$sql_save_desription = "UPDATE user SET descriptions = :desc_value, stat_desc = :station  WHERE username = :username_description";
$stmt_description = $conn->prepare($sql_save_desription);
$stmt_description->bindParam(':desc_value', $description_value);
$stmt_description->bindParam(':station', $stat_of_desc);
$stmt_description->bindParam(':username_description', $username);
$stmt_description->execute();

    echo '
        <script>
            Swal.fire({
                title: "Successfly!",
                text: "Success, Description Saved Successfly!",
                icon: "success"
            });
        </script>
    ';
    echo '<meta http-equiv="refresh" content="3">';
}
// Saving Description Of User End


// Choosing Gender Of User Start
if (isset($_POST['gender']) && isset($_POST['sub_gender'])) {
$gender_kind = $_POST['gender'];

$sql_gender = "UPDATE user SET gender = :gender_user  WHERE username = :username_gender";
$stmt_gender = $conn->prepare($sql_gender);
$stmt_gender->bindParam(':gender_user', $gender_kind);
$stmt_gender->bindParam(':username_gender', $username);
$stmt_gender->execute();

    echo '
        <script>
            Swal.fire({
                title: "Successfly!",
                text: "Success, Gender Saved Successfly!",
                icon: "success"
            });
        </script>
    ';
    echo '<meta http-equiv="refresh" content="3">';

}
// Choosing Gender Of User End
