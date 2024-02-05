<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة التبادل التعليمي</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* تعديل أنماط المنشورات */
        .forum-post {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .forum-post:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .forum-post img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .forum-post p {
            margin-bottom: 10px;
        }

        .forum-post button {
            margin-top: 10px;
        }
        
        /* تعديل أنماط اسم المستخدم */
        .username {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
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
		footer {
            background-color: #3498db;
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 100%;
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
                <li><a href="#">المنتدى</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <form method="post" action="process_post.php">
                    <div class="form-group">
                        <label for="post_content">اكتب منشورك هنا:</label>
                        <textarea class="form-control" id="post_content" name="post_content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">نشر</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <!-- عرض المنشورات هنا -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "123456";
            $dbname = "project2024";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("فشل الاتصال: " . $conn->connect_error);
            }

            $sql = "SELECT posts.*, myfristable.first_name, myfristable.last_name, myfristable.profile_image_path FROM posts INNER JOIN myfristable ON posts.user_id = myfristable.ID ORDER BY posts.created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-12'>";
                    echo "<div class='forum-post'>";
                    echo "<div class='card-body'>";
                    echo "<div class='user-profile'>";
                    echo "<img src='" . $row['profile_image_path'] . "' alt='صورة المستخدم' class='user-avatar'>";
                    echo "<span class='username'>" . $row['first_name'] . " " . $row['last_name'] . "</span>";
                    echo "</div>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "<form method='post' action='delete_post.php'>";
                    echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
                    echo "<button type='submit' class='btn btn-danger' onclick='return confirmDelete()'>حذف المنشور</button>";
                    echo "</form>";
                    echo "<form method='post' action='reply_post.php'>";
                    echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
                    echo "<div class='form-group'>";
                    echo "<label for='reply_content'>الرد:</label>";
                    echo "<textarea class='form-control' id='reply_content' name='reply_content' rows='1' required></textarea>";
                    echo "</div>";
                    echo "<button type='submit' class='btn btn-primary'>الرد</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='col-md-12'>";
                echo "<div class='forum-post'>";
                echo "<div class='card-body'>";
                echo "<p>لا توجد منشورات حتى الآن.</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            $conn->close();
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 منصة التبادل التعليمي</p>
    </footer>

    <script>
        function confirmDelete() {
            return confirm('هل تريد بالفعل حذف المنشور؟');
        }
    </script>
</body>

</html>
