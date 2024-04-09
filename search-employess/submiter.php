<?php
require_once '../connect.php';

if (isset($_POST['title']) && isset($_POST['filter_form']) && isset($_COOKIE['us'])) {
    $title = $_POST['title'];
    $kind = $_POST['filter_form'];

    $username = base64_decode($_COOKIE['us']);

    try {
        $sql_form = "INSERT INTO request_job (user_request, title, kind_request) VALUES (:user_request, :title, :kind_request)";
        $stmt_form = $conn->prepare($sql_form);
        $stmt_form->bindParam(':user_request', $username);
        $stmt_form->bindParam(':title', $title);
        $stmt_form->bindParam(':kind_request', $kind);
        $stmt_form->execute();
        echo 'Success, Job Added Successfcly';
    } catch (PDOException $e) {
        // يمكنك استخدام $e->getMessage() للحصول على رسالة الخطأ
        echo 'Failed, You already Submited A Job';
    }
}
?>