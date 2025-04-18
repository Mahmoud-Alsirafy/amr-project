<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مرحباً بك</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #337ab7;
        }
        .btn-primary:hover {
            background-color: #286090;
        }
        .btn-success {
            background-color: #5cb85c;
        }
        .btn-success:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>مرحباً بك <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>لقد سجلت الدخول بنجاح إلى النظام.</p>
        
        <div class="buttons">
            <a href="4dd/main.php" class="btn btn-success">الصفحة الإضافية</a>
            <a href="logout.php" class="btn btn-primary">تسجيل الخروج</a>
        </div>
    </div>
</body>
</html>