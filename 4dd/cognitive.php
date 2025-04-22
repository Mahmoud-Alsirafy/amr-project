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
    <title>الأهداف المعرفية - تصميم موحد</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="styles.css?v=2">
    <style>
        .content-box p,
        h3 {
            color: #000 !important;
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
                    </div>
                </div>
                <a href="exam.php">اختبار شامل</a>
                <a href="https://wa.me/201004701467" target="blank">تواصل معنا</a>
                <a href="logout.php" class="logout-btn">خروج</a>
            </div>
        </nav>
    </header>

    <main>
    <div class="content-box page-header">
        <h2 class="text-dark">الكواكب الداخلية والخارجية</h2>
        <p class="text-dark">معلومات عن الكواكب في نظامنا الشمسي</p>
        <hr style="border: 0; border-top: 1px solid #000; margin-top: 1rem;">
    </div>

    <div class="objective-item content-box">
        <h3>الكواكب الداخلية</h3>
        <p>الكواكب التي تقع بين الشمس وحزام الكويكبات، وتشمل: عطارد، الزهرة، الأرض، والمريخ.</p>
    </div>
    <div class="objective-item content-box">
        <h3>الكواكب الخارجية</h3>
        <p>الكواكب التي تقع بعد حزام الكويكبات، وتشمل: المشتري، زحل، أورانوس، ونبتون.</p>
    </div>
    <div class="objective-item content-box">
        <h3>الفرق بين الكواكب الداخلية والخارجية</h3>
        <p>الكواكب الداخلية صغيرة الحجم، صخرية، وتدور بالقرب من الشمس. أما الكواكب الخارجية فهي كبيرة الحجم، غازية، وتدور بعيدًا عن الشمس.</p>
    </div>
    <div class="objective-item content-box">
        <h3>الخصائص المشتركة</h3>
        <p>جميع الكواكب تدور حول الشمس وتتميز بوجود جاذبية تحافظ على الأجرام السماوية الأخرى في مدارها.</p>
    </div>
    <div class="objective-item content-box">
        <h3>الاستكشافات الحديثة</h3>
        <p>تم إجراء العديد من الاستكشافات الفضائية للكواكب، بما في ذلك إرسال مركبات فضائية لاستكشاف المشتري والمريخ.</p>
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