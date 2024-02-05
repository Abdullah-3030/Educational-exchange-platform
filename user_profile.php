<?php
session_start();

// التحقق من وجود جلسة مستخدم
if (!isset($_SESSION['user_id'])) {
    // إذا لم يكن المستخدم قام بتسجيل الدخول، قم بتوجيهه إلى صفحة تسجيل الدخول
    header("Location: SignUp.php");
    exit();
}

include 'db_config.php';

$user_id = $_SESSION['user_id'];

// استعلام لاسترجاع بيانات المستخدم
$sql = "SELECT * FROM myfristable WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result === FALSE) {
    echo "خطأ في استعلام قاعدة البيانات: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // عرض بيانات المستخدم في هذه الصفحة بطريقة مميزة
        echo "مرحبًا " . $row['first_name'] . " " . $row['last_name'];
        echo "<br>اسم المستخدم: " . $row['username'];
        echo "<br>البريد الإلكتروني: " . $row['email'];
        echo "<br>الجنس: " . $row['gender'];
        // عرض الصورة
        echo "<br>صورة المستخدم: <img src='" . $row['profile_image_path'] . "' alt='صورة المستخدم'>";

        // إضافة زر لتسجيل الخروج
        echo "<br><a href='logout.php'>تسجيل الخروج</a>";
        // وهكذا...
    } else {
        echo "لم يتم العثور على بيانات المستخدم.";
    }
}

$conn->close();
?>
