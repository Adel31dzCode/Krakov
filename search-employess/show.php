<?php
require_once '../connect.php';

    try {
        
        $sql_search = 'SELECT * FROM request_job ORDER BY RAND() LIMIT 20';
        $stmt_search = $conn->prepare($sql_search);
        $stmt_search->execute();
        
        $rows = $stmt_search->fetchAll(PDO::FETCH_ASSOC);
        
        // عرض النتائج الوحيدة أو التحقق مما إذا كانت هناك نتائج
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





                echo '<article class="offer style_gr">';
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
                echo '<hr class="comma">';
            }
            echo '<button class="btn btn-primary btn_centring foreach_btns">Show More +</button>';

        } else {
            // لا توجد نتائج
            echo '<p>No more results found.</p>';
        }
    } catch (PDOException $e) {
        // إرجاع الخطأ كتنسيق JSON
        echo 'Connection failed: ' . $e->getMessage();
    }

?>