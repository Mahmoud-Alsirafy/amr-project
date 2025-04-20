<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسية - تصميم موحد</title>
    <link rel="stylesheet" href="../bootstrap.min.css">

    <link rel="stylesheet" href="styles.css?v=2">
    <style>
        .card {
            text-align: center !important;
            margin-top: 15px;
            font-size: large;
        }

        .card a {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            margin-right: 10px;
        }

        .card a:hover {
            transition: 0.5s;
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <header class="main-header">
        <nav class="main-nav">
            <a href="main.php" class="site-title">موقع تعليم الهندسة</a>
            <div class="nav-links">
                <a href="main.php">الرئيسية</a>
                <div class="dropdown">
                    <button class="dropdown-btn">الأهداف التعليمية</button>
                    <div class="dropdown-content">
                        <a href="cognitive.php">الأهداف المعرفية</a>
                        <a href="affective.php">الأهداف الوجدانية</a>
                        <a href="skills.php">الأهداف المهارية</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-btn">قائمة المحتوى</button>
                    <div class="dropdown-content">
                        <a href="lesson1.php">الدرس الأول</a>
                        <a href="lesson2.php">الدرس الثاني</a>
                        <a href="lesson3.php">الدرس الثالث</a>
                        <a href="lesson4.php">الدرس الرابع</a>
                        <a href="lesson5.php">الدرس الخامس</a>
                        <a href="lesson6.php">الدرس السادس</a>

                    </div>
                </div>
                <a href="exam.php">اختبار شامل</a>
                <a href="https://wa.me/201004701467" target="blank">تواصل معنا</a>
                <a href="../logout.php" class="logout-btn">خروج</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="content-box" id="main">
            <h2>مرحباً بك في موقع تعليم الهندسة</h2>
            <p class="text-white">منصة تعليمية متخصصة في تقديم المحتوى الهندسي بطريقة سهلة ومبسطة</p>
        </section>

        <div class="card-container">
            <div class="content-box card">
                <h3>الأهداف التعليمية</h3>
                <p>تعرف على الأهداف المعرفية والوجدانية والمهارية التي نسعى لتحقيقها</p>
                <a href="cognitive.php" class="btn-card">تصفح الأهداف</a>
            </div>
            <div class="content-box card">
                <h3>الدروس التعليمية</h3>
                <p>استكشف الدروس المتاحة وابدأ رحلة التعلم</p>
                <a href="lesson1.php" class="btn-card">عرض الدروس</a>
            </div>
            <div class="content-box card">
                <h3>الاختبار الشامل</h3>
                <p>اختبر معلوماتك وتأكد من تحقيقك للأهداف التعليمية</p>
                <a href="exam.php" class="btn-card">بدء الاختبار</a>
            </div>
        </div>
        

    </main>

    <footer class="main-footer">
        <p>جميع الحقوق محفوظة &copy; <span id="currentYear">2025</span> موقع تعليم الهندسة</p>
    </footer>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>

</html>