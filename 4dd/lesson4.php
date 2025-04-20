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
    <title>الدرس الأول - حالات المادة</title>
    <link rel="stylesheet" href="../bootstrap.min.css">

    <link rel="stylesheet" href="styles.css?v=2">
    <style>
        .question p {
            color: #000;
        }

        #lessonContent h2,
        .lesson-content p {
            color: #000;
        }

        .lesson-content ul {
            list-style: none;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .lesson-content ul li {
            margin-top: 20px;
            cursor: pointer;
        }

        .lesson-content ul li:hover {
            transition: 0.5s;
            transform: scale(1.1);
            color: #4e73df;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <nav class="main-nav">
            <a href="main.php" class="site-title">موقع تعليم العلوم</a>
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
                <button class="logout-btn" onclick="logout()">خروج</button>
            </div>
        </nav>
    </header>

    <main>
        <div class="content-box lesson-section" id="preTest">
            <h2>الاختبار القبلي</h2>
            <form id="preTestForm">
                <div class="question">
                    <p>1. ما نوع الكلمة: "يلعب"؟</p>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a" required> اسم</label>
                        <label><input type="radio" name="q1" value="b"> فعل</label>
                        <label><input type="radio" name="q1" value="c"> حرف</label>
                    </div>
                </div>
                <button type="button" class="btn" onclick="showLesson()">بدء الدرس</button>
            </form>
        </div>

        <div class="content-box lesson-section" id="lessonContent" style="display:none;">
            <h2>الدرس: أنواع الكلمة</h2>
            <div class="lesson-content">
                <p>الكلمة في اللغة العربية تنقسم إلى: اسم، وفعل، وحرف.</p>
                <p>الاسم يدل على شيء مثل: طالب – كتاب.
                    الفعل يدل على حدث: كتب – ذهب.
                    الحرف لا يظهر معناه إلا مع غيره: من – إلى – في.</p>
            </div>
            <button type="button" class="btn" onclick="showPostTest()">اختبار بعدي</button>
        </div>

        <div class="content-box lesson-section" id="postTest" style="display:none;">
            <h2>الاختبار البعدي</h2>
            <form id="postTestForm">
                <div class="question">
                    <p>1. ما نوع الكلمة: "المدرسة"؟</p>
                    <div class="options">
                        <label><input type="radio" name="post_q1" value="a" required> اسم</label>
                        <label><input type="radio" name="post_q1" value="b"> فعل</label>
                        <label><input type="radio" name="post_q1" value="c"> حرف</label>
                    </div>
                </div>
                <button type="button" class="btn" onclick="finishLesson()">إنهاء الدرس</button>
            </form>
        </div>
        <div class="video-container text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/1LaTzipZUBs?si=Bc35UrhLWYrvqra_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        </div>
    </main>
    <footer class="main-footer">
        <p>جميع الحقوق محفوظة &copy; <span id="currentYear">2025</span> موقع تعليم العلوم</p>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        function logout() {
            window.location.href = 'index.php';
        }

        function showLesson() {
            const preTestForm = document.getElementById('preTestForm');
            if (!preTestForm.checkValidity()) {
                alert('الرجاء الإجابة على سؤال الاختبار القبلي أولاً.');
                return;
            }
            document.getElementById('preTest').style.display = 'none';
            document.getElementById('lessonContent').style.display = 'block';
            document.getElementById('lessonContent').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function showPostTest() {
            document.getElementById('lessonContent').style.display = 'none';
            document.getElementById('postTest').style.display = 'block';
            document.getElementById('postTest').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function finishLesson() {
            const postTestForm = document.getElementById('postTestForm');
            if (!postTestForm.checkValidity()) {
                alert('الرجاء الإجابة على سؤال الاختبار البعدي أولاً.');
                return;
            }
            alert('أحسنت! لقد أكملت الدرس الأول بنجاح.');
            window.location.href = 'lesson5.php';
        }
    </script>
</body>

</html>