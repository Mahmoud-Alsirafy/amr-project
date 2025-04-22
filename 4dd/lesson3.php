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
                    </div>
                </div>
                <a href="exam.php">اختبار شامل</a>
                <a href="https://wa.me/201004701467" target="blank">تواصل معنا</a>
                <button class="logout-btn" onclick="logout()">خروج</button>
            </div>
        </nav>
    </header>
    <main>
    <!-- الاختبار القبلي -->
    <div class="content-box lesson-section" id="preTest">
        <h2>الاختبار القبلي</h2>
        <form id="preTestForm">
            <div class="question">
                <p>1. ما هو الفرق بين الكواكب الداخلية والخارجية؟</p>
                <div class="options">
                    <label><input type="radio" name="q1" value="a" required> <span>الكواكب الداخلية أصغر حجمًا من الكواكب الخارجية</span></label>
                    <label><input type="radio" name="q1" value="b"> <span>الكواكب الخارجية تحتوي على المزيد من الغازات</span></label>
                    <label><input type="radio" name="q1" value="c"> <span>الكواكب الخارجية تدور أسرع من الكواكب الداخلية</span></label>
                </div>
            </div>
            <button type="button" class="btn" onclick="showLesson()">بدء الدرس</button>
        </form>
    </div>

    <!-- درس الكواكب الخارجية -->
    <div class="content-box lesson-section" id="lessonContent" style="display:none;">
    <h2 class="text-dark">الدرس: الكواكب الخارجية</h2>
    <div class="lesson-content">
        <p>الكواكب الخارجية هي الكواكب التي تقع بعيدًا عن الشمس. تتميز هذه الكواكب بأنها أكبر حجمًا من الكواكب الداخلية وتتكون في الغالب من الغازات. الكواكب الخارجية هي:</p>
        <ul>
            <li>المشتري</li>
            <li>زحل</li>
            <li>أورانوس</li>
            <li>نبتون</li>
        </ul>
        <p>هذه الكواكب تحتوي على غلاف غازي واسع، يتكون من غازات مثل الهيدروجين والهيليوم. كما تحتوي الكواكب الخارجية على العديد من الأقمار. على سبيل المثال:</p>
        
        <h3>المشتري</h3>
        <p>المشتري هو أكبر كوكب في النظام الشمسي، ويعتبر عملاقًا غازيًا. يحتوي على غلاف غازي سميك ويشتهر بالعاصفة العظيمة الحمراء، وهي عاصفة ضخمة تدور في الغلاف الجوي للكوكب منذ مئات السنين. يحتوي المشتري على 79 قمرًا، وأكبر قمرين هما غانيميد وكاليستو.</p>
        
        <h3>زحل</h3>
        <p>زحل هو الكوكب الذي يتميز بحلقاته الواسعة التي تتكون من الجليد والصخور. زحل هو ثاني أكبر كوكب في النظام الشمسي، ويحتوي على 82 قمرًا معروفًا، أكبرها هو تيتان. الكوكب يتكون بشكل رئيسي من الهيدروجين والهيليوم، ويعتبر أحد أبرز الكواكب في السماء بسبب حلقاته المدهشة.</p>
        
        <h3>أورانوس</h3>
        <p>أورانوس هو كوكب عملاق جليدي يختلف عن باقي الكواكب بسبب ميوله الشديد، حيث يميل محوره بنحو 98 درجة على مداره. يتميز أورانوس بلونه الأزرق بسبب غاز الميثان في غلافه الجوي. أورانوس يحتوي على 27 قمرًا معروفًا. بالإضافة إلى ذلك، أورانوس لديه حلقات ضبابية دقيقة قد تكون أقل وضوحًا من حلقات زحل.</p>
        
        <h3>نبتون</h3>
        <p>نبتون هو الكوكب الثامن والأبعد عن الشمس في النظام الشمسي. يتميز نبتون بلونه الأزرق العميق بسبب غاز الميثان في غلافه الجوي. الكوكب يحتوي على رياح شديدة السرعة، والتي تعتبر الأسرع في النظام الشمسي. نبتون يحتوي على 14 قمرًا، وأكبر قمر له هو تريتون الذي يتمتع بحركة عكسية حول الكوكب.</p>
        
        <p>على الرغم من أن الكواكب الخارجية تحتوي على العديد من المميزات المشتركة مثل الغلاف الغازي والأقمار، إلا أنها تختلف في خصائصها مثل الحجم والظروف البيئية.</p>
        
        <p>تتميز الكواكب الخارجية بأنها أكبر بكثير من الكواكب الداخلية، ولها حلقات مميزة كما في حالة زحل، بالإضافة إلى أن معظمها لا يحتوي على سطح صلب يمكن الهبوط عليه، بل هو عبارة عن غازات وسوائل تحت الضغط العالي.</p>
    </div>
    <button type="button" class="btn" onclick="showPostTest()">انتقل إلى الاختبار البعدي</button>
</div>


    <!-- الاختبار البعدي -->
    <div class="content-box lesson-section" id="postTest" style="display:none;">
        <h2>الاختبار البعدي</h2>
        <form id="postTestForm">
            <div class="question">
                <p>1. ما هي الكواكب الخارجية؟</p>
                <div class="options">
                    <label><input type="radio" name="post_q1" value="a" required> <span>الكواكب المشتري وزحل وأورانوس ونبتون</span></label>
                    <label><input type="radio" name="post_q1" value="b"> <span>الكواكب الأرضية مثل الأرض والمريخ</span></label>
                    <label><input type="radio" name="post_q1" value="c"> <span>الكواكب الصغيرة مثل بلوتو وأريس</span></label>
                </div>
            </div>
            <button type="button" class="btn btn-success" onclick="finishLesson()">إنهاء الدرس</button>
        </form>
    </div>

    <!-- فيديو تعليمي -->
    <div class=" ">
            <img src="out.jpg" class="img-fluid text-center" alt="">
        </div>
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
            window.location.href = 'lesson4.php';
        }
    </script>
</body>

</html>