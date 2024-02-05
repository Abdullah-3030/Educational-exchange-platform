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

    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id'];

    // التأكد من أن المستخدم هو صاحب المنشور قبل حذفه
    $check_owner_sql = "SELECT * FROM posts WHERE id = '$post_id' AND user_id = '$user_id'";
    $check_owner_result = $conn->query($check_owner_sql);
    if ($check_owner_result->num_rows > 0) {
        // إذا كان المستخدم هو صاحب المنشور، قم بحذفه
        $delete_sql = "DELETE FROM posts WHERE id = '$post_id'";
        if ($conn->query($delete_sql) === TRUE) {
            header("Location: form.php");
        } else {
            echo "خطأ: " . $delete_sql . "<br>" . $conn->error;
        }
    } else {
        echo "لا يمكن حذف هذا المنشور، لأنك لست صاحبه.";
    }

    $conn->close();
}
?>
