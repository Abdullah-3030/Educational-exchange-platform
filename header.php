<?php
// بدء جلسة المستخدم
session_start();

// التحقق من وجود جلسة مستخدم
if (isset($_SESSION['user_id'])) {
    // إذا كان المستخدم مسجل الدخول، قم بإخفاء الروابط
    $displayStyle = "style='display:none;'";
} else {
    $displayStyle = ""; // لعرض الروابط لغير المستخدمين المسجلين
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة التبادل التعليمي</title>
    <style>
        /* أسلوب تصميم الهيدر هنا */
    </style>
</head>

<body>
    <header>
        <h1>منصة التبادل التعليمي</h1>
        <nav>
            <ul>
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="tafsel.html">التعلم</a></li>
                <li><a href="#">المنتدى</a></li>
                <!-- قم بإخفاء الروابط إذا كان المستخدم مسجل الدخول -->
                <li <?php echo $displayStyle; ?>><a href="SignUp.php">تسجيل</a></li>
                <li <?php echo $displayStyle; ?>><a href="login.php">تسجيل الدخول</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>
