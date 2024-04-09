<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img_logo/full_icon_light.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="bootraps_and font_awsome/css/all.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/samer_style_n1.css">
    <!-- <link rel="stylesheet" href="bootraps_and font_awsome/css/bootstrap.min.css"> -->
    <title>Krakov| Find Your Job Now!</title>
</head>
<body class="bg">


<!-- Here Start The NavBar Section -->

  <div id="all_all">
    <nav class="bg">

        <a href="" class="light_on"><img class="logo" src="img_logo/logo-light.png" alt="Logo_Light"></a>
        <a href="" class="dark_on"><img class="logo" src="img_logo/logo-dark.png" alt="Logo_Dark"></a>

        <a href="" class="light_on_only"><img class="logo_only" src="img_logo/full_icon_light.png" alt="Logo_Light"></a>
        <a href="" class="dark_on_only"><img class="logo_only" src="img_logo/full_icon_dark.png" alt="Logo_Dark"></a>

        <ul id="cantainer_ul">
            <a href=""><il class="baby_list font right_now">Home</i></il></a>
            <a href="search-employess/"><il class="baby_list font">Search Employees</il></a>
            <il style="position: relative;" class="baby_list font btn_mode" id="btn_md">Mode  <i class="fa-solid fa-chevron-down icon_list"></i>
            
            <div id="option_mode" class="bg">
                <ul>
                    <li class="list_mode top light_btn"> <img src="img_logo/check.png" class="check_light">  Light</li>
                    <hr id="break">
                    <li class="list_mode bottom dark_btn"> <img src="img_logo/check.png" class="check_dark">  Dark</li>
                </ul>
            </div>
            
            </il>


            
            
            <?php 
            if (isset($_COOKIE['us']) && isset($_COOKIE['ps'])) {

                require_once 'connect.php';

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
                    <img src="img_logo/empty-box.png" alt="No_thing" id="empty_doc" class="font">
                </div>    
            </li>
            <li class="baby_list_sp logged_list" id="lister">
                <img src="profile/uploads_img/' . $photo_profile . '" alt="Profile_photo" id="profile_photo" class="marg_bt"/>
                <span id="for_media_nav">
                    <p id="username" class="font">' .  base64_decode($_COOKIE['us']) . '</p>
                    <i class="fa-solid fa-sort-down pr_icon font" id="ic"></i>
                </span>
                <div id="profile_opt" class="bg">
                    <ul>
                        <a href="profile/"><li class="profile_list_opt font top_pr"><i class="fa-regular fa-user"></i>   Profile</li></a>
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
            echo '<il class="baby_list font log set_log_dark"><a href="/hire_web/log_in/"><span class="login font set_log_dark">Log in  </span></a><a href="/hire_web/regester/"><span class="sign font">Regester</span></a>';
            }
            
        ?>


        </ul>

        <div id="burger_menu">
            <img class="line_top mecanic" src="img_logo/wrench.png">
            <img class="line_middle mecanic" src="img_logo/screwdriver.png">
        </div>

    </nav>


<!-- End Start The NavBar Section -->

    <article class="first_section leader" >
        <div id="text_sec">
            <p id="tittle" class="font">Krakov <img class="ic_dr" src="img_logo/full_icon_light.png"></p>
            <p id="describe" class="font">First<span class="exectly">Direction </span>For Find A Job</p>
            <p id="information" class="font">Krakov Is A Free Free! It Is A Platform Connecting The Manager And His Employees!</p>

            <div id="demos">
                <button class="letter">
                    <div class="ripple"></div>
                    <div class="sp">Get Started!</div>
                </button>
                <a href="#suggestes"><p id="suggest" class="tittle_im">See More Suggest Above! <i class="fa-solid fa-chevron-down"></i></p></a>
            </div>
        </div>
        <div id="img_sec">
            <img id="clarification" src="img_logo/5340018-PhotoRoom.png-PhotoRoom.png" alt="Photo-clarification">
        </div>
    </article>

    <article class="secend_sec leader">
        <div id="collect_content">
            <div id="first_dir">
                <span>
                    <p id="des" class="font">More Than +3 Million User!</p>
                    <p id="des_less" class="font">Easy To To Find Job Or Find Employeess As Manager</p>
                </span>
            </div>
            <div id="second_dir">
                <div id="filter"></div>
                <img id="man_search" src="img_logo/man_search_job.jpg" alt="Photo_Searchin_Job">
            </div>
        </div>
    </article>

    <article class="three_sec leader">

        <section class="statistics">
            <p class="num">+30 000</p>
            <h1 class="tittle_section font">Upload Files Every Day</h1>
            <p class="infr font">We GetEvery Day   Most Than 30 000 Request File Work We Show It For Managers And We Took Positive Acceptable.</p>


            <div class="parent_range">

                <div data-text="+36 000" class="range" onmouseover="showTitle('+36 000')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="80%" class="persent"></span>
                    <span class="fix_position">Today +36 000</span>
                    <span class="tittle_folowwong" id="custom-title">+36 000</span>
                </div>

                <div data-text="+32 000" class="range" onmouseover="showTitle('+32 000')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="72%" class="persent"></span>
                    <span class="fix_position">Yesterday +32 000</span>
                    <span class="tittle_folowwong" id="custom-title-2">+32 000</span>
                </div>


                <div data-text="+26 000" class="range" onmouseover="showTitle('+29 000')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="68%" class="persent"></span>
                    <span class="fix_position">Last Yesterday +29 000</span>
                    <span class="tittle_folowwong" id="custom-title-2">+29 000</span>
                </div>
            </div>

        </section>

        <section class="statistics">
            <p class="num">3</p>
            <h1 class="tittle_section font-32 font">Poppular Jobs</h1>
            <p class="infr font">The Request As We Took Like The Statistics Below:</p>

            <div class="parent_range">
                <div data-text="+32 000" class="range" onmouseover="showTitle('24%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="24%" class="persent"></span>
                    <span class="fix_position">Resturent 24%</span>
                    <span class="tittle_folowwong" id="custom-title-2">+29 000</span>
                </div>

                <div data-text="+32 000" class="range" onmouseover="showTitle('18%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="18%" class="persent"></span>
                    <span class="fix_position">Designer 18%</span>
                    <span class="tittle_folowwong" id="custom-title-2">18%</span>
                </div>


                <div data-text="+32 000" class="range" onmouseover="showTitle('15%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="15%" class="persent"></span>
                    <span class="fix_position">Barber 15%</span>
                    <span class="tittle_folowwong" id="custom-title-2">15%</span>
                </div>

                <div data-text="+32 000" class="range" onmouseover="showTitle('70%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="70%" class="persent"></span>
                    <span class="fix_position">Others 70%</span>
                    <span class="tittle_folowwong" id="custom-title-2">70%</span>
                </div>

            </div>
        </section>

        <section class="statistics">
            <p class="num">68%</p>
            <h1 class="tittle_section font">Find Thir Job</h1>
            <p class="infr font">68% Per Requesters Find A Work As Us And This Support Another People To Join To Us For More Updates Soon!</p>

            <div class="parent_range">
                <div data-text="+32 000" class="range" onmouseover="showTitle('68%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="68%" class="persent"></span>
                    <span class="fix_position">Current Year 68%</span>
                    <span class="tittle_folowwong" id="custom-title-2">68%</span>
                </div>
                <div data-text="+32 000" class="range" onmouseover="showTitle('60%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="60%" class="persent"></span>
                    <span class="fix_position">Last Year 60%</span>
                    <span class="tittle_folowwong" id="custom-title-2">60%</span>
                </div>
                <div data-text="+32 000" class="range" onmouseover="showTitle('54%')" onmouseout="hideTitle()">
                    <span style="width: 0%;" data-width="54%" class="persent"></span>
                    <span class="fix_position">Before Last Year 54%</span>
                    <span class="tittle_folowwong" id="custom-title-2">54%</span>
                </div>
            </div>
        </section>

    </article>


    <article class="four_sec leader">

        <article id="big_continer">

            <p class="tittle_opinion font">We Received A Messege From A <br class="probally"> User From Solvakia He Said In:</p>
            
            <div class="flex">
                <div id="photo_stactist"><img src="img_logo/honest.jpeg" alt="Photographer">
                <div id="play">
                    <div class="continer_svg">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <span>
                        <p class="bodcast">Watch Podcast</p>
                        <p class="time_bodcast">23:08</p>
                    </span>
                </div>
                </div>

                <div id="oponion" class="font">
                    <span>
                        “
                        Hello, I am James. When I Finish The University I Has 18 I Still 2Years Searching For A Job Until  I Found Krakov.
                        I Was Profficienel Photographer So I Upload My File CV In And After Trys During 3 Weeks I Won First 25$ I Really Appreciation
                        That And Thank For Krakov Website! Now A Day I Still Work For My Dreams! “<br>
                        <span class="from">From: James Williams.</span>
                    </span>
                </div>
            </div>

        </article>

    </article>

    <hr id="comma">

    <article class="five_sec leader" id="suggestes">

        <div id="left_dir">
            <span>
                <p id="info_brands" class="font">Krakov Trusted By The Outstanding <span class="under"> Brands And More Than +15 000</span></p>
                <p id="lit" class="font">Recognized Among Companies</p>
            </span>
        </div>
        <div id="right_dir">
            <span>
                <img class="trendsmark" src="img_logo/hp.png" alt="HP Mark">
                <img class="trendsmark" src="img_logo/google.png" alt="Google Mark">
            </span>
            <span>
                <img class="trendsmark" src="img_logo/microsoft.png" alt="Microsoft Mark">
                <img class="trendsmark" src="img_logo/samsung.png" alt="Samsung Mark">
            </span>
        </div>

    </article>

    <hr id="comma">


    <article class="six_sec leader">

        <section class="static">
            <p class="numbe"><span data-goal="420" class="number">0</span>K</p>
            <p class="of_what font">Users</p>
        </section>

        <section class="static">
            <p class="numbe"><span data-goal="60" class="number">0</span>K</p>
            <p class="of_what font">Negotiate And Find Them Job</p>
        </section>

        <section class="static">
            <p class="numbe"><span data-goal="300" class="number">0</span>k</p>
            <p class="of_what font">Uploads Thier Files</p>
        </section>


    </article>

    <hr id="comma">

    <article class="seven_set leader">

        <h1 class="acceptable_bradns font">Congrats From Some Brands:</h1>

        <div id="flexing">  

            <div class="piece">
                <p class="txt_congrats font">“  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur rem quaerat beatae. Impedit soluta voluptates voluptate veniam. Amet illum aliquam, aliquid maxime perferendis minima voluptatem odio accusantium fugiat, iusto fugit!  “</p>
                <span class="comma_brands"></span>
                <img src="img_logo/brand1.webp" alt="Brand 1" class="brnd">
                <p class="mark_name font">Shaper Korp</p>
                <p class="manager_comunuty">Manager Of Community "Newyork Times"</p>
            </div>

            <div class="piece">
                <p class="txt_congrats font">“  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur rem quaerat beatae. Impedit soluta voluptates voluptate veniam. Amet illum aliquam, aliquid maxime perferendis minima voluptatem odio accusantium fugiat, iusto fugit!  “</p>
                <span class="comma_brands"></span>
                <img src="img_logo/brand2.webp" alt="Brand 2" class="brnd">
                <p class="mark_name font">Cooper Luacas</p>
                <p class="manager_comunuty">Famous Developer Softwar</p>
            </div>

            <div class="piece">
                <p class="txt_congrats font">“  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur rem quaerat beatae. Impedit soluta voluptates voluptate veniam. Amet illum aliquam, aliquid maxime perferendis minima voluptatem odio accusantium fugiat, iusto fugit!  “</p>
                <span class="comma_brands"></span>
                <img src="img_logo/brand3.webp" alt="Brand 3" class="brnd">
                <p class="mark_name font">Judo Frame</p>
                <p class="manager_comunuty">CEO</p>
            </div>

        </div>

    </article>

    <article class="eight_sec leader">

        <div id="main_content">
            <div class="last_left_dir_last">
                    <p id="tittle_do">Upload Your CV <br class="ds_work"> For Find Your Job,<br> Search For Employees</p>
                    <button class="requesting_file">Regester Now!</button>
            </div>
            <div class="last_right_dir_last">
                <img src="https://21140470.fs1.hubspotusercontent-na1.net/hubfs/21140470/smiling-attendant.png" alt="Photo_Women" class="services_women">
            </div>
        </div>

    </article>

    <footer>
        <div class="gradient_line"></div>

        <div id="menus">

            <ul class="footer_menu">
                <li class="footer_list lead_ul font">Web By</li>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font"><span class="goldem">Adel31_dz</span></li></a>
                <li class="footer_list"></li>
                <li class="footer_list"></li>
            </ul>

            <ul class="footer_menu">
                <li class="footer_list lead_ul font">About Web</li>
                <a target="_blank" href="http://portfolio-adel31dz.000.pe/?i=1"><li class="footer_list font">Portfolio</li></a>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font">About</li></a>
            </ul>

            <ul class="footer_menu">
                <li class="footer_list lead_ul font">Creator</li>
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100088792934532"><li class="footer_list font">Facebook</li></a>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font">Instagram</li></a>
                <a target="_blank" href="https://www.youtube.com/@Premium-Code-By_Adel31_dz"><li class="footer_list font">Youtube</li></a>
            </ul>

            <ul class="footer_menu">
                <li class="footer_list lead_ul font">Rules</li>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font">Privacy</li></a>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font">Securty</li></a>
                <a target="_blank" href="https://www.instagram.com/adel31_dz/"><li class="footer_list font">Feedback</li></a>
            </ul>



        </div>

        <p id="date_last">© 2023 KRAKOV FROM <span class="goldem">Adel31_dz</span></p>

    </footer>

            <div id="tahari_for_not"></div>

            <div id="tahari_for_nav"></div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="bootraps_and font_awsome/js/all.min.js"></script>
    <script src="js/script_of_sammer1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- <script src="bootraps_and font_awsome/js/bootstrap.bundle.min.js"></script>  -->

</body>
</html>