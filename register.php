<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["newUsername"];
    $newPassword = password_hash($_POST["newPassword"], PASSWORD_BCRYPT);
    $profileImage = $_FILES["profileImage"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    // مكان تخزين الصور في السيرفر
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($profileImage["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // السماح بحجم الصورة حتى 5 ميجابايت
    if ($profileImage["size"] > 5000000) {
        echo "عذرًا، الحد الأقصى لحجم الملف هو 5 ميجابايت.";
        $uploadOk = 0;
    }

    // السماح بأنواع الصور المحددة
    $allowedFileTypes = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "عذرًا، يسمح فقط بتحميل ملفات JPG و JPEG و PNG و GIF.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        // إذا كانت جميع الشروط تمر، قم بتحميل الصورة
        if (move_uploaded_file($profileImage["tmp_name"], $targetFile)) {
            $sql = "INSERT INTO myfristable (username, password_hash, profile_image_path, gender, mobile, email, dob, first_name, last_name) 
        VALUES ('$newUsername', '$newPassword', '$targetFile', '$gender', '$mobile', '$email', '$dob', '$firstName', '$lastName')";

            if ($conn->query($sql) === TRUE) {
                // تم التسجيل بنجاح!
                session_start();
                $_SESSION['username'] = $newUsername;
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email;
                $_SESSION['gender'] = $gender;

                echo "تم التسجيل بنجاح!";
                // بعد التسجيل بنجاح، قم بتوجيه المستخدم إلى صفحة عرض بيانات المستخدم
                header("Location: user_profile.php");
                exit();
            } else {
                echo "خطأ في التسجيل: " . $conn->error;
            }
        } else {
            echo "حدث خطأ أثناء تحميل الصورة.";
        }
    }
}

$conn->close();
?>
