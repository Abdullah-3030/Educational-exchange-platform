<!DOCTYPE html>
<html lang="ar">

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
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
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

        .main-content {
            margin: 20px;
            text-align: center;
        }

        .search-bar {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .search-input {
            width: 60%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            display: inline-block;
        }

        .search-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
        }

.courses-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
}

/* إضافة هذا الكود إلى مقطع الستايل */
.course-card {
    position: relative;
    overflow: hidden;
}

/* إضافة هذا الكود إلى مقطع الستايل */
.course-image {
    width: 25%;
    height: auto;
    position: absolute;
    top: 0;
    left: 40%; /* تعديل هذه القيمة حسب التوجيه المطلوب */
    z-index: -1;
}



.course-card h3 {
    color: #3498db;
    margin-top: 60px; /* قم بتعديل هذه القيمة حسب احتياجات التصميم */
}

.course-card p {
    color: #555;
}

.course-card button {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
    width: 100%;
}

.course-card button:hover {
    background-color: #2980b9;
}

        .course-card h3 {
            color: #3498db;
        }

        .course-card p {
            color: #555;
        }

        .course-card button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .course-card button:hover {
            background-color: #2980b9;
        }

        .articles-container {
            margin-top: 50px;
            text-align: center;
        }

        .article-card {
            width: 600px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .article-card h2 {
            color: #3498db;
        }

        .article-card p {
            color: #555;
        }

        .community-section {
            background-color: #f9f9f9;
            padding: 30px 0;
            text-align: center;
        }

        .community-section h2 {
            color: #333;
        }

        .community-section p {
            color: #555;
        }

        footer {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 100%;
        }
		
		    .course-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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

    <section class="main-content">
        <h2>مرحبًا بك في منصة التبادل التعليمي</h2>
        <p>استكشف مجموعة واسعة من الدورات التعليمية وطور مهاراتك!</p>

        <div class="search-bar">
            <input type="text" class="search-input" placeholder="ابحث عن دورة...">
            <button class="search-button">ابحث</button>
        </div>
		
        <div class="courses-container">
            <div class="course-card">
        <img src="ptpttyt.jpg" alt="Course Image" class="course-image">
		
                <h3>دورة البرمجة بلغة Python</h3>
                <p>ابدأ رحلتك في عالم البرمجة مع Python.</p>
                <a href="tafsel.php"><button>تفاصيل الدورة</button></a>
            </div>

            <div class="course-card">
		<img src="phux.jpg" alt="Course Image" class="course-image">
                <h3>دورة تطوير واجهات المستخدم</h3>
                <p>تعلم كيفية بناء واجهات مستخدم جذابة وفعالة.</p>
                <button>تفاصيل الدورة</button>
            </div>

            <div class="course-card">
                <h3>دورة تطوير تطبيقات الجوّال</h3>
                <p>اكتسب مهارات تطوير تطبيقات الجوّال مع هذه الدورة المميزة.</p>
                <button>تفاصيل الدورة</button>
            </div>

            <div class="course-card">
                <h3>دورة تصميم قواعد البيانات</h3>
                <p>تعلم كيفية تصميم وإدارة قواعد البيانات بفعالية.</p>
                <button>تفاصيل الدورة</button>
            </div>

            <div class="course-card">
                <h3>دورة الذكاء الاصطناعي</h3>
                <p>استكشف عالم الذكاء الاصطناعي وتعلم أساسياته وتطبيقاته.</p>
                <button>تفاصيل الدورة</button>
            </div>

            <div class="course-card">
                <h3>دورة تحليل البيانات</h3>
                <p>اكتسب مهارات تحليل البيانات واستخراج الرؤى القيمة.</p>
                <button>تفاصيل الدورة</button>
            </div>

            <div class="course-card">
                <h3>دورة تطوير تطبيقات الويب</h3>
                <p>تعلم كيفية بناء تطبيقات الويب الديناميكية والمتقدمة.</p>
                <button>تفاصيل الدورة</button>
            </div>
        </div>
    </section>

    <section class="articles-container">
        <h2>مقالات تعليمية</h2>
        <div class="article-card">
            <h2>كيفية تحسين مهارات البرمجة الخاصة بك</h2>
            <p>نصائح فعّالة لتطوير مهارات البرمجة الخاصة بك والوصول إلى مستوى أعلى.</p>
        </div>

        <div class="article-card">
            <h2>أفضل المصادر لتعلم تصميم واجهات المستخدم</h2>
            <p>اكتشف أفضل المواقع والكتب والدورات لتطوير مهارات تصميم واجهات المستخدم الخاصة بك.</p>
        </div>
    </section>

    <section class="community-section">
        <h2>انضم إلى مجتمعنا</h2>
        <p>تفاعل مع متعلمين آخرين وشارك أفكارك وتجاربك في المنتدى الخاص بنا.</p>
        <button>الانضمام إلى المنتدى</button>
    </section>

    <footer class="footer">
        <p>&copy; 2023 منصة التبادل التعليمي</p>
    </footer>
	
	<br>
	</br>
	
	<br>
	</br>
	


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var searchInput = document.querySelector('.search-input');
        var searchButton = document.querySelector('.search-button');

        searchButton.addEventListener('click', function () {
            var searchTerm = searchInput.value.trim();
            alert('قريبا...: ' + searchTerm);
          
        });
    });
</script>




</body>

</html>
