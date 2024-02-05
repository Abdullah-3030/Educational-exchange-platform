<?php
session_start();
// إلغاء جلسة المستخدم
session_unset();
session_destroy();
// إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
header("Location: SignUp.php");
exit();
?>
