<?php
session_start();
if(!isset($_SESSION['login'])) {
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
        .objective >*{
            color: #000 !important;
        }
        .content-box hr{
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
<a href="lesson4.php">الدرس الرابع</a>
<a href="lesson5.php">الدرس الخامس</a>
<a href="lesson6.php">الدرس السادس</a>

                    </div>
                </div>
                <a href="exam.php">اختبار شامل</a>
                <a href="https://wa.me/201004701467" target="blank">تواصل معنا</a>
                <button class="logout-btn" onclick="logout()">خروج</button> </div>
        </nav>
    </header>

    <main>
        <div class="content-box">
            <h1>الأهداف الوجدانية</h1>
                <hr>
            <div class="objective">
                <h3>تقدير أهمية الهندسة</h3>
                <p>تنمية الوعي بأهمية الهندسة في تطوير المجتمع وحل مشكلاته.</p>
            </div>
                <hr>            
            <div class="objective">
                <h3>الاهتمام بالعمل الجماعي</h3>
                <p>تطوير الرغبة في العمل ضمن فريق والمشاركة في المشاريع الجماعية.</p>
            </div>
                <hr>
            <div class="objective">
                <h3>الالتزام بالأخلاقيات المهنية</h3>
                <p>تنمية الالتزام بالمعايير الأخلاقية والمهنية في العمل الهندسي.</p>
            </div>
                <hr>
            <div class="objective">
                <h3>الاهتمام بالتطوير المستمر</h3>
                <p>تعزيز الرغبة في التعلم المستمر ومواكبة التطورات في مجال الهندسة.</p>
            </div>
                <hr>
            <div class="objective">
                <h3>تقدير الإبداع والابتكار</h3>
                <p>تنمية الاتجاه نحو التفكير الإبداعي وتقدير الحلول المبتكرة.</p>
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