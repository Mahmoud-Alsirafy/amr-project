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
    <title>الأهداف المهارية - تصميم موحد</title>
    <link rel="stylesheet" href="styles.css?v=2">
    <style>
        .objective>* {
            color: #000 !important;
        }

        .content-box hr {
            color: #007bff !important;
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
                <button class="logout-btn" onclick="logout()">خروج</button>
            </div>
        </nav>
    </header>

    <main>
        <div class="content-box">
            <h1>الأهداف المهارية للكواكب</h1>
            <hr>
            <div class="objective">
                <h3>مهارات تحليل الكواكب</h3>
                <p>تطبيق منهجيات علمية لتحليل خصائص الكواكب المختلفة في النظام الشمسي.</p>
            </div>
            <hr>
            <div class="objective">
                <h3>مهارات استكشاف الفضاء</h3>
                <p>القدرة على تصميم بعثات فضائية لاكتشاف الكواكب ودراسة بيئاتها.</p>
            </div>
            <hr>
            <div class="objective">
                <h3>مهارات استخدام الأدوات الفضائية</h3>
                <p>استخدام الأدوات والتقنيات المتقدمة مثل التلسكوبات والأجهزة الفضائية لتحليل الكواكب.</p>
            </div>
            <hr>
            <div class="objective">
                <h3>مهارات التواصل العلمي</h3>
                <p>إعداد تقارير ودراسات علمية حول الكواكب وأبحاث الفضاء بشكل دقيق وواضح.</p>
            </div>
            <hr>
            <div class="objective">
                <h3>مهارات إدارة البعثات الفضائية</h3>
                <p>فهم أساسيات إدارة البعثات الفضائية وتنظيم المشاريع المتعلقة بالاستكشاف الفضائي.</p>
            </div>
        </div>
    </main>


    <footer class="main-footer">
        <p>جميع الحقوق محفوظة &copy; <span id="currentYear">2025</span> موقع تعليم الهندسة</p>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        function logout() {
            window.location.href = 'index.php';
        }
    </script>
</body>

</html>