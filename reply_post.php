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
    $reply_content = $_POST['reply_content'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO replies (post_id, user_id, content) VALUES ('$post_id', '$user_id', '$reply_content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
