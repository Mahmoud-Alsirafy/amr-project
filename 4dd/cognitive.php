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
    <title>الأهداف المعرفية - تصميم موحد</title>
       <link rel="stylesheet" href="styles.css?v=2">
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
                    </div>
                </div>
                 <a href="exam.php">اختبار شامل</a>
                 <a href="https://wa.me/201004701467" target="blank">تواصل معنا</a>
                 <a href="logout.php" class="logout-btn">خروج</a> </div>
        </nav>
    </header>

    <main>
        <div class="content-box page-header" >
             <h2>الأهداف المعرفية</h2>
             <p style="color: var(--light-text);">المعرفة والمفاهيم التي نسعى لاكسابها للطلاب</p>
             <hr style="border: 0; border-top: 1px solid var(--border-color); margin-top: 1rem;">
        </div>

        <div class="objective-item content-box">
            <h3>الفهم والاستيعاب</h3>
            <p>فهم المفاهيم الأساسية في الهندسة وتطبيقاتها العملية.</p>
        </div>
        <div class="objective-item content-box">
            <h3>التحليل</h3>
            <p>القدرة على تحليل المشكلات الهندسية وتجزئتها إلى عناصر أساسية.</p>
        </div>
        <div class="objective-item content-box">
            <h3>التطبيق</h3>
            <p>تطبيق المبادئ الهندسية في حل المشكلات العملية.</p>
        </div>
        <div class="objective-item content-box">
            <h3>التقييم</h3>
            <p>تقييم الحلول الهندسية وفعاليتها في حل المشكلات.</p>
        </div>
        <div class="objective-item content-box">
            <h3>الابتكار</h3>
            <p>تطوير حلول مبتكرة للمشكلات الهندسية المعقدة.</p>
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