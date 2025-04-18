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
    <title>الدرس الثاني - تصميم موحد</title>
         <link rel="stylesheet" href="styles.css?v=2">
         <style>
        .question p{
            color: #000;
        }

        #lessonContent h2 , .lesson-content p{color: #000;}
        .lesson-content ul{
            list-style: none;
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .lesson-content ul li{
            margin-top: 20px;
        }
        .lesson-content ul li:hover{
            transition: 0.5s;
            transform: scale(1.1);
            color: #4e73df;    
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
                    <p>1. ما هي أهم مهارات المهندس؟</p>
                    <div class="options">
                        <label for="l2q1a"><input type="radio" id="l2q1a" name="q1" value="a" required> <span>المهارات الفنية فقط</span></label>
                        <label for="l2q1b"><input type="radio" id="l2q1b" name="q1" value="b"> <span>مهارات التواصل فقط</span></label>
                        <label for="l2q1c"><input type="radio" id="l2q1c" name="q1" value="c"> <span>المهارات الفنية والتحليلية ومهارات التواصل وحل المشكلات</span></label>
                    </div>
                </div>
                 <button type="button" class="btn" onclick="showLesson()">بدء الدرس</button>
            </form>
        </div>

        <div class="content-box lesson-section" id="lessonContent" >
            <h2>الدرس الثاني: المهارات الهندسية الأساسية</h2>
            <div class="lesson-content">
                <p>يحتاج المهندس إلى مجموعة متنوعة من المهارات للنجاح في مجاله:</p>
                <ul>
                    <li>المهارات التحليلية والرياضية</li>
                    <li>مهارات التصميم والتفكير الإبداعي</li>
                    <li>مهارات حل المشكلات</li>
                    <li>مهارات التواصل والعمل الجماعي</li>
                </ul>
                <p>تساعد هذه المهارات المهندسين في:</p>
                <ul>
                    <li>تحليل المشكلات المعقدة</li>
                    <li>تطوير حلول مبتكرة</li>
                    <li>العمل بفعالية ضمن فريق</li>
                    <li>التواصل مع العملاء والزملاء</li>
                </ul>
            </div>
            <button type="button" class="btn" onclick="showPostTest()">انتقل إلى الاختبار البعدي</button>
        </div>

        <div class="content-box lesson-section" id="postTest" >
            <h2>الاختبار البعدي</h2>
            <form id="postTestForm">
                <div class="question">
                    <p>1. لماذا تعتبر مهارات التواصل مهمة للمهندس؟</p>
                    <div class="options">
                        <label for="l2pq1a"><input type="radio" id="l2pq1a" name="post_q1" value="a" required> <span>للتواصل مع العملاء والزملاء وشرح الحلول الفنية</span></label>
                        <label for="l2pq1b"><input type="radio" id="l2pq1b" name="post_q1" value="b"> <span>للكتابة فقط</span></label>
                        <label for="l2pq1c"><input type="radio" id="l2pq1c" name="post_q1" value="c"> <span>ليست مهمة للمهندس</span></label>
                    </div>
                </div>
                 <button type="button" class="btn btn-success" onclick="finishLesson()">إنهاء الدرس</button>
            </form>
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

       function showLesson() {
             const preTestForm = document.getElementById('preTestForm');
             if (!preTestForm.checkValidity()) {
                 alert('الرجاء الإجابة على سؤال الاختبار القبلي أولاً.');
                  const invalidInput = preTestForm.querySelector(':invalid');
                  if (invalidInput) {
                      let qBlock = invalidInput.closest('.question');
                      if(qBlock) qBlock.style.outline = '1px solid var(--error-color)';
                      setTimeout(() => {if(qBlock) qBlock.style.outline = 'none';}, 3000);
                  }
                 return;
             }
            document.getElementById('preTest').style.display = 'none';
            document.getElementById('lessonContent').style.display = 'block';
            document.getElementById('lessonContent').scrollIntoView({ behavior: 'smooth' });
        }

        function showPostTest() {
            document.getElementById('lessonContent').style.display = 'none';
            document.getElementById('postTest').style.display = 'block';
            document.getElementById('postTest').scrollIntoView({ behavior: 'smooth' });
        }

        function finishLesson() {
             const postTestForm = document.getElementById('postTestForm');
             if (!postTestForm.checkValidity()) {
                  alert('الرجاء الإجابة على سؤال الاختبار البعدي أولاً.');
                  const invalidInput = postTestForm.querySelector(':invalid');
                   if (invalidInput) {
                      let qBlock = invalidInput.closest('.question');
                      if(qBlock) qBlock.style.outline = '1px solid var(--error-color)';
                      setTimeout(() => {if(qBlock) qBlock.style.outline = 'none';}, 3000);
                  }
                 return;
             }
            alert('أحسنت! لقد أكملت الدرس الثاني بنجاح.');
            window.location.href = 'exam.php'; // Go to exam page after last lesson
        }
    </script>
</body>
</html>