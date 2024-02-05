<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "project2024";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("فشل الاتصال: " . $conn->connect_error);
    }

    $post_content = $_POST['post_content'];
    $user_id = $_SESSION['user_id'];

    // استعلام للحصول على بيانات المستخدم
    $user_info_sql = "SELECT first_name, last_name, profile_image_path FROM myfristable WHERE ID = '$user_id'";
    $user_info_result = $conn->query($user_info_sql);
    $user_info_row = $user_info_result->fetch_assoc();
    $first_name = $user_info_row['first_name'];
    $last_name = $user_info_row['last_name'];
    $profile_image_path = $user_info_row['profile_image_path'];

    $sql = "INSERT INTO posts (content, user_id, first_name, last_name, profile_image_path) VALUES ('$post_content', '$user_id', '$first_name', '$last_name', '$profile_image_path')";

    if ($conn->query($sql) === TRUE) {
        header("Location: form.php");
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
