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
    <title>الأهداف الوجدانية - تصميم موحد</title>
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
        <h1>الخصائص الوجدانية للكواكب</h1>
        <hr>
        <div class="objective">
            <h3>تقدير أهمية الكواكب الداخلية</h3>
            <p>تنمية الوعي بأهمية الكواكب الداخلية في فهم تكوين النظام الشمسي وتأثيرها على الحياة على الأرض.</p>
        </div>
        <hr>
        <div class="objective">
            <h3>الاهتمام بالكواكب الخارجية</h3>
            <p>تطوير الفهم للخصائص المميزة للكواكب الخارجية ودورها في النظام الشمسي.</p>
        </div>
        <hr>
        <div class="objective">
            <h3>التقدير للبحث الفضائي</h3>
            <p>تنمية الالتزام باكتشاف الكواكب من خلال البعثات الفضائية والتقدم التكنولوجي.</p>
        </div>
        <hr>
        <div class="objective">
            <h3>الاستكشاف العلمي المستمر</h3>
            <p>تعزيز الرغبة في اكتشاف المزيد عن الكواكب، وفتح آفاق البحث العلمي في الفضاء.</p>
        </div>
        <hr>
        <div class="objective">
            <h3>تقدير التنوع بين الكواكب</h3>
            <p>تنمية الفهم لكيفية تنوع الكواكب، سواء الداخلية أو الخارجية، من حيث التركيب البيئي والظروف المحيطة.</p>
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