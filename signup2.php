<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة التبادل التعليمي</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
            margin-bottom: 20px;
        }

        nav {
            background-color: #2980b9;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
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
            font-size: 18px;
        }

        #container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 600px;
            text-align: center;
            padding: 40px;
            margin: 50px auto;
            transition: all 0.3s ease-in-out;
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        .login-btn,
        .register-btn {
            background-color: #3498db;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        .login-btn:hover,
        .register-btn:hover {
            background-color: #2980b9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 16px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-form,
        .register-form {
            display: none;
            transition: all 0.3s ease-in-out;
        }

        .login-form.active,
        .register-form.active {
            display: block;
        }

        .toggle-btn {
            background-color: #ddd;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 10px;
            font-size: 16px;
            color: #555;
            transition: background-color 0.3s ease-in-out;
        }

        .toggle-btn:hover {
            background-color: #ccc;
        }

        footer {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 100%;
        }
    </style>
    <script>
        function showLoginForm() {
            document.querySelector('.login-form').classList.add('active');
            document.querySelector('.register-form').classList.remove('active');
            document.getElementById('container').style.height = 'auto';
        }

        function showRegisterForm() {
            document.querySelector('.login-form').classList.remove('active');
            document.querySelector('.register-form').classList.add('active');
            document.getElementById('container').style.height = 'auto';
        }

        function toggleForm() {
            var loginForm = document.querySelector('.login-form');
            var registerForm = document.querySelector('.register-form');

            if (loginForm.classList.contains('active')) {
                showRegisterForm();
            } else {
                showLoginForm();
            }
        }
    </script>
</head>

<body>

    <header>
        <h1>منصة التبادل التعليمي</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">الرئيسية</a></li>
            <li><a href="#">الدورات</a></li>
            <li><a href="#">المنتدى</a></li>
            <li><a href="#" onclick="showLoginForm()">تسجيل الدخول</a></li>
        </ul>
    </nav>

    <div id="container">
        <div class="form-container login-form active">
            <h2>تسجيل الدخول</h2>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">اسم المستخدم:</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور:</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">تسجيل الدخول</button>
            </form>
            <button class="toggle-btn" onclick="toggleForm()">التبديل إلى تسجيل حساب جديد</button>
        </div>

        <div class="form-container register-form">
            <h2>تسجيل حساب جديد</h2>
            <form action="register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="newUsername">اسم المستخدم:</label>
                    <input type="text" id="newUsername" name="newUsername" required>
                </div>
                <div class="form-group">
                    <label for="newPassword">كلمة المرور:</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                </div>
                <div class="form-group">
                    <label for="profileImage">صورة الملف الشخصي:</label>
                    <input type="file" id="profileImage" name="profileImage" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="gender">الجنس:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mobile">رقم الجوال:</label>
                    <input type="tel" id="mobile" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="dob">تاريخ الميلاد:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="firstName">الاسم الأول:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">الاسم الأخير:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <button type="submit" class="register-btn">تسجيل</button>
            </form>
            <button class="toggle-btn" onclick="toggleForm()">التبديل إلى تسجيل الدخول</button>
        </div>
    </div>

    <footer>
        © 2024 منصة التبادل التعليمي
    </footer>

    <script>
        window.addEventListener('scroll', function () {
            var footer = document.querySelector('footer');
            var container = document.getElementById('container');

            if (window.scrollY + window.innerHeight >= document.body.clientHeight - footer.clientHeight) {
                container.style.marginBottom = footer.clientHeight + 'px';
            } else {
                container.style.marginBottom = '0';
            }
        });
    </script>

</body>

</html>
