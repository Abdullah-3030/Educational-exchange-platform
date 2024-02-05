<!DOCTYPE html>
<html lang="ar">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الدورات</title>
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

    <!-- باقي محتوى الصفحة -->







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

        .course-details {
            width: 70%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .course-details h2 {
            color: #3498db;
            text-align: center;
            padding: 20px 0;
        }

        .course-details img {
            width: 100%;
            height: auto;
        }

        .course-details ul {
            list-style: none;
            padding: 0;
            text-align: right;
            margin: 20px;
        }

        .course-details button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            display: block;
            font-size: 16px;
            margin-top: 20px;
        }

        .course-ratings {
            margin: 20px;
            text-align: right;
        }

        .rating {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .rating p {
            color: #555;
        }

        .star {
            color: #f39c12;
        }
		
	.footer {
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


    <div class="course-details">
        <h2>تفاصيل الدورة: دورة البرمجة بلغة Python</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
         
        </ul>
        <a href="mmm.php"><button>التسجيل في الدورة</button></a>

        <!-- تقييمات المتعلمين -->
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
           
        </div>
    </div>

   
    <div class="course-details">
        <h2>تفاصيل الدورة: دورة تطوير واجهات المستخدم</h2>
        <img src="ui.jpg" alt="صورة الدورة">
        <ul>
          
        </ul>
        <button>التسجيل في الدورة</button>

       
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>تعلمت الكثير حول تطوير واجهات المستخدم الجذابة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 3/5</p>
                <p>كانت الدورة تحتاج إلى مزيد من الشروحات.</p>
            </div>
          
        </div>
    </div>



  
	
	    <div class="course-details">
        <h2>دورة تطوير تطبيقات الجوّال</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
          
        </ul>
        <button>التسجيل في الدورة</button>

    
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
           
        </div>
    </div>
	
		    <div class="course-details">
        <h2>دورة تصميم قواعد البيانات</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
           
        </ul>
        <button>التسجيل في الدورة</button>

     
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
            
        </div>
    </div>
	
	
			    <div class="course-details">
        <h2>دورة الذكاء الاصطناعي</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
         
        </ul>
        <button>التسجيل في الدورة</button>

    
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
           
        </div>
    </div>


			    <div class="course-details">
        <h2>دورة تطوير تطبيقات الويب</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
          
        </ul>
        <button>التسجيل في الدورة</button>

   
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
            
        </div>
    </div>

		    <div class="course-details">
        <h2>دورة تحليل البيانات</h2>
        <img src=".jpg" alt="صورة الدورة">
        <ul>
            
        </ul>
        <button>التسجيل في الدورة</button>

       
        <div class="course-ratings">
            <h3>تقييمات المتعلمين</h3>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <p>تقييم: 5/5</p>
                <p>رائعة! استفدت كثيرًا من هذه الدورة.</p>
            </div>

            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
                <p>تقييم: 4/5</p>
                <p>دورة جيدة وسهلة الفهم.</p>
            </div>
          
        </div>
    </div>




<br>
</br>

<br>
</br>




      <footer class="footer">
        <p>&copy; 2023 منصة التبادل التعليمي</p>
    </footer>

</body>

</html>
