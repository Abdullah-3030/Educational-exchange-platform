<?php
include 'db_config.php';

// بدء جلسة المستخدم
session_start();

// التحقق من وجود جلسة مستخدم
if (isset($_SESSION['user_id'])) {
    // إذا كان المستخدم مسجل الدخول، قم بإخفاء الروابط
    $displayStyle = "style='display:none;'";
} else {
    $displayStyle = ""; // لعرض الروابط لغير المستخدمين المسجلين
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password_hash FROM myfristable WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result === FALSE) {
        echo "خطأ في استعلام قاعدة البيانات: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // استخدم password_verify للتحقق من صحة كلمة المرور
            if (password_verify($password, $row["password_hash"])) {
                // تم تسجيل الدخول بنجاح
                echo "تم تسجيل الدخول بنجاح!";

                // حفظ بيانات المستخدم في الجلسة
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // توجيه المستخدم إلى صفحة البيانات الخاصة به
                header("Location: user_profile.php");
                exit();
            } else {
                echo "فشل تسجيل الدخول. كلمة المرور غير صحيحة.";
            }
        } else {
            echo "فشل تسجيل الدخول. اسم المستخدم غير موجود.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تسجيل الدخول</title>
</head>

<body>
    <header>
        <h1>منصة التبادل التعليمي</h1>
        <nav>
            <ul>
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="tafsel.html">التعلم</a></li>
                <li><a href="#">المنتدى</a></li>
                <li <?php echo $displayStyle; ?>><a href="SignUp.php">تسجيل</a></li>
                <li <?php echo $displayStyle; ?>><a href="login.php">تسجيل الدخول</a></li>
            </ul>
        </nav>
    </header>

    <!-- محتوى الصفحة -->

</body>

</html>
