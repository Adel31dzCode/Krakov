
<?php

require_once '../connect.php';
$default_img = 'new_user.jpg';
try {
    if (isset($_POST['username']) && isset($_POST['country']) && isset($_POST['skill']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        $username = $_POST['username'];
        $country = $_POST['country'];
        $skill = $_POST['skill'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // التحقق مما إذا كان هناك اسم مستخدم متطابق
        $checkSql = "SELECT * FROM user WHERE username = :username";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bindParam(':username', $username);
        $checkStmt->execute();

        
    }
} catch (PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}
?>

<?php 
if (isset($_COOKIE['us']) && isset($_COOKIE['ps'])) {
    header("Location: ../index.php");
} else {

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
    <link rel="stylesheet" type="text/css" href="../bootraps_and font_awsome/css/all.min.css">
    <link rel="stylesheet" href="../bootraps_and font_awsome/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="../js/sweetalert2@11.js"></script>
    <title>Regester! | krakov</title>
</head>
<body class="bg">

    <!-- Logo  -->
    <a href="../index.php" class="logo_light"><img src="../img_logo/icon_logo_light.png" alt="Logo Light" class="logo"></a>
    <a href="../index.php" class="logo_dark"><img src="../img_logo/icon_logo_dark.png" alt="Logo Dark" class="logo"></a>


    <div id="big_parent">

        <div id="img_sec">
            <img src="img/login.png" alt="">
        </div>

        <div id="former_sec">

        <ul class="cont_listes">
          <li class="child_lst"><img src="../log_in/img/moon.png" class="dark sma" alt="dd"> <img src="../log_in/img/sun.png" class="light sma" alt=""></li>
          <li class="child_lst1"><a href="../"><img src="../log_in/img/close.png" alt=""></a></li>
        </ul>


            <form method="POST" id="form">

                <div id="levels">
                    <span class="lvl fr">1</span>
                    <span class="lvl sc">2</span>
                    <span class="lvl th">3</span>
                    <span class="line"></span>
                </div>

                <h1 id="tittle" class="font_dr">Register</h1>

                <div id="contirner_pos">

                    <div id="custom_fr">
                        <div class="col-md-4 mt-lg-5 cust user w-100">
                            <label for="validationCustom01" class="form-label font_dr">Create Your Username</label>
                            <input type="text" class="form-control user_inp" id="validationCustom01" placeholder="Username"  name="username">
                            <div class="text text-center mt-3 user_msg" id="msg">

                            <?php 

                            if (!isset($_POST['username'])) {
                                // Default MSG
                                echo 'Create Your Username!';
                            }

                if (isset($_POST['username']) && isset($_POST['country']) && isset($_POST['skill']) && isset($_POST['email']) && isset($_POST['password'])) {
                            if ($checkStmt->rowCount() > 0) {
                            // يوجد اسم مستخدم متطابق
                            echo '
                            <script>
                            Swal.fire({
                                title: "Failed!",
                                text: "Failed, The Username Is Dublicated Please Choose Else",
                                icon: "error"
                            });
                            </script>
                        ';
                        } else {
                            
                            // لا يوجد اسم مستخدم متطابق، قم بإدراج السجل
                            $insertSql = "INSERT INTO user (username, country, skills, email, passwords, img_url) VALUES (:username, :country, :skill, :email, :passwords, :img)";
                            $stmt = $conn->prepare($insertSql);
                            $stmt->bindParam(':username', $username);
                            $stmt->bindParam(':country', $country);
                            $stmt->bindParam(':skill', $skill);
                            $stmt->bindParam(':email', $email);
                            $stmt->bindParam(':passwords', $password);
                            $stmt->bindParam(':img', $default_img);
                            $stmt->execute();

                            $username_coded = base64_encode($username);
                            setcookie('us', $username_coded, time() + (8640 * 300), "/");

                            $password_coded = base64_encode($password);
                            setcookie('ps', $password_coded, time() + (8640 * 300), "/");

                            echo '
                                    <script>
                                    Swal.fire({
                                        title: "Successfly!",
                                        text: "Success, Your Account Has Created Welcome To You In Krakov!",
                                        icon: "success"
                                    });
                                    </script>
                                ';
                            echo '<meta http-equiv="refresh" content="3">';
                        }}

?>

                            </div>
                        </div>
                    </div>
                

                    <div id="custom_sc">
                        <div class="col-md-4 cust country w-100">
                            <label for="validationCustom01" class="form-label font_dr">Select Your Country:</label>
                            <div style="position: relative;">
                                <select id="country" name="country" class="form-control cont_inp">
                                    <option value="" disabled selected>Choose Your Country:</option>
                                    <option value="Palastine">Palastine!</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                
                                </select>
                                <i class="fa-solid fa-caret-down font_dr"></i>
                            </div>
                            <div class="text text-center mt-3 country_msg font_dr" id="msg">Select Your Country</div>
                        </div>
                    

                    
                    
                        <div class="col-md-4 cust skill w-100">
                            <label for="validationCustom01" class="form-label mt-2 font_dr">What Your Skill?</label>
                            <input type="text" class="form-control skl_inp" id="validationCustom01" placeholder="Skill(s)"  name="skill">
                            <div class="text text-center mt-3 skill_msg font_dr" id="msg">Ex: Barber, Restaurant!</div>
                        </div>
                    </div>
                    
                    <div id="custom_th">
                        <div class="col-md-4 mt-lg-5 cust email w-100">
                            <label for="validationCustom01" class="form-label font_dr">What Your Email?</label>
                            <input type="email" class="form-control email_inp" id="validationCustom01" placeholder="Email"  name="email">
                            <div class="text text-center mt-3 email_msg font_dr" id="msg">Ex: example@gmail.com</div>
                        </div>
                    

                        <div class="col-md-4 cust password w-100">
                            <label for="validationCustom01" class="form-label font_dr">Create Your Password</label>
                            <input type="password" class="form-control pss_inp" id="validationCustom01" placeholder="Password"  name="password">
                            <div class="text text-center mt-3 password_msg font_dr" id="msg">Type Now!</div>
                        </div>
                    </div>

                
                </div>


                <div id="btns" class="mt-5">
                    <button type="button" class="btn btn-primary" disabled id="prev" name="suber">Prev</button>
                    <button type="submit" class="btn btn-primary" id="nxt">Next</button>
                </div>

            </form>
            
        </div>






    <script src="../bootraps_and font_awsome/js/all.min.js"></script>
    <script src="../bootraps_and font_awsome/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>


</body>
</html>
<?php }

