<?php
session_start();

// التحقق من وجود جلسة مستخدم
if (!isset($_SESSION['user_id'])) {
    // إذا لم يكن المستخدم قام بتسجيل الدخول، قم بتوجيهه إلى صفحة تسجيل الدخول
    header("Location: SignUp.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة محددة للمستخدم</title>
</head>

<body>
    <h1>مرحبًا بك في الصفحة المخصصة للمستخدم</h1>
    <!-- باقي محتوى الصفحة -->
</body>

</html>



<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دورة البرمجة بلغة Python</title>

    <style>
            body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .main-content {
            margin: 20px;
            text-align: center;
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .video-card {
            width: 45%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .video-card:hover {
            transform: scale(1.05);
        }

        .video-card h3 {
            color: #3498db;
        }

        .video-card video {
            width: 100%;
            height: auto;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>منصة التبادل التعليمي</h1>
        <nav>
            <ul>
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="tafsel.php">التعلم</a></li>
                <li><a href="form.php">المنتدى</a></li>
            <li><a href="SignUp.php" onclick="showLoginForm()">تسجيل الدخول</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <h2>دورة البرمجة بلغة Python</h2>
        <div class="video-container" id="videosContainer">
            <!-- مقطع الفيديو الجديد -->
            <div class="video-card">
                <h3>الدرس الثاني: المتغيرات</h3>
                <video width="100%" controls>
                    <source src="vari.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <!-- بقية مقاطع الفيديو -->
            <div class="video-card">
                <h3>كتابة السطر الأول في بايثون</h3>
                <video width="100%" controls>
                    <source src="pypy.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
   
            <div class="video-card">
                <h3>الدرس الأول: مقدمة في Python</h3>
                <video width="100%" controls>
                    <source src="python_intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="video-card">
                <h3>الدرس الثاني: أساسيات Python</h3>
                <video width="100%" controls>
                    <source src="python_basics.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
   
            <!-- يمكنك إضافة المزيد من مقاطع الفيديو هنا -->
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 منصة التبادل التعليمي</p>
    </footer>
	
	<br>
	</br>
	
	<br>
	</br>
	
</body>

</html>
