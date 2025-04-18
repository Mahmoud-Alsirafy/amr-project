
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل مستخدم جديد</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e59d9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #f1f4fb; 
            border: 1px solid #e3e6f0; 
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: none;
            border: 1px solid #ccc !important;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4e73df;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2e59d9;
        }
        .error {
            color: red;
            text-align: center;
        }
        .success {
            color: green;
            text-align: center;
        }
        #reg{
            text-align: center !important;
            margin-top: 15px;
            font-size: large;
        }
        #reg a{
            text-decoration: none;
            color: #4e73df;
            display: inline-block;
            margin-right: 10px;
        }
        #reg a:hover{
            transition: 0.5s;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>تسجيل مستخدم جديد</h2>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // الاتصال بقاعدة البيانات
            $conn = new mysqli('localhost', 'root', '', 'init');
            
            // التحقق من الاتصال
            if ($conn->connect_error) {
                die("فشل الاتصال: " . $conn->connect_error);
            }
            
            // تشفير كلمة المرور
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // إدخال البيانات في قاعدة البيانات
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            $q ="SELECT * FROM `users` WHERE `username` = '$username'";
            $r = mysqli_query($conn, $q);
            if (mysqli_num_rows($r) == 0) {
            if ($stmt->execute()) {
                echo ' <div class="alert alert-success" role="alert">تم التسجيل بنجاح! سيتم تحويلك لصفحة الدخول.</div>';
                header("refresh:2; url=login.php");
            } else {
                echo '<p class="error">خطأ: ' . $conn->error . '</p>';
            }
        } else {
            echo ' <div class="alert alert-danger" role="alert">"اسم المستخدم مسجل بالفعل"</div>';
           
        }
            
            $stmt->close();
            $conn->close();
        }
        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

         
            <div class="form-group">
                <label for="username">اسم المستخدم:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">تسجيل</button>
        </form>
        <p id="reg"> لديك حساب؟ <a href="login.php">سجل الآن</a></p>
    </div>
</body>
</html>