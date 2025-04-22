<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدرس: الكواكب الداخلية</title>
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
                    <p>1. ما هي خصائص الكواكب الداخلية؟</p>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a" required> الكواكب الداخلية أكبر حجمًا</label>
                        <label><input type="radio" name="q1" value="b"> الكواكب الداخلية أقرب إلى الشمس ولها سطح صلب</label>
                        <label><input type="radio" name="q1" value="c"> الكواكب الداخلية بعيدة عن الشمس ولها جو غازي</label>
                    </div>
                </div>
                <button type="button" class="btn" onclick="showLesson()">بدء الدرس</button>
            </form>
        </div>

        <!-- الدرس -->
        <div class="content-box lesson-section" id="lessonContent" style="display:none;">
    <h2 class="text-dark">الدرس: الكواكب الخارجية</h2>
    <div class="lesson-content">
        <p>الكواكب الخارجية هي الكواكب التي تقع بعيدًا عن الشمس، وتتميز بأنها أكبر حجمًا وتتكون في الغالب من الغازات. هذه الكواكب هي:</p>
        <ul>
            <li>المشتري: أكبر كوكب في المجموعة الشمسية، ويتميز بجو مكون بشكل رئيسي من الهيدروجين والهيليوم. يحتوي على العديد من الأقمار، وأبرزها قمر "غاليليو" الذي يعتبر من أكبر الأقمار.</li>
            <li>زحل: معروف بحلقاته الشهيرة المكونة من جزيئات الجليد والصخور. كوكب غازي أيضًا، وتعد حجوم حلقاته الأكبر في النظام الشمسي.</li>
            <li>أورانوس: كوكب مائل على جانبه بزاوية 98 درجة، ويتميز بلونه الأزرق بسبب وجود غاز الميثان في جوه. يتميز بجو بارد للغاية.</li>
            <li>نبتون: يعد الكوكب الثامن والأبعد عن الشمس في المجموعة الشمسية. يتميز بلونه الأزرق المميز نتيجة وجود الميثان في جوه، ويُعتقد أن لديه عواصف جوية شديدة على سطحه.</li>
        </ul>

        <p>تتميز الكواكب الخارجية بأنها أكبر بكثير من الكواكب الداخلية ولها غلاف غازي واسع، مثل غازات الهيدروجين والهيليوم. كما أنها تحتوي على العديد من الأقمار التي تدور حولها. تتمتع هذه الكواكب أيضًا بجو شديد البرودة، وتختلف ظروف الحياة على هذه الكواكب مقارنة بالكواكب الداخلية.</p>
        
        <p>من المهم ملاحظة أن الكواكب الخارجية تحتوي على أنظمة حلقات مدهشة (مثل زحل) وأجواء كثيفة مليئة بالغازات، مقارنة بالكواكب الداخلية التي تكون أقرب إلى الشمس وأقل حجمًا. الكواكب الخارجية هي أيضًا غالبًا ما تكون أكثر عرضة للعواصف الجوية الشديدة، مثل العواصف التي نشهدها على كوكب المشتري.</p>

        <p>تعتبر هذه الكواكب موضوعًا مهمًا في دراسة الفضاء نظرًا لتكويناتها الفريدة والأقمار التي تدور حولها، والتي قد تحتوي على خصائص قد تكشف لنا عن بداية تكوّن النظام الشمسي نفسه.</p>
    </div>
    <button type="button" class="btn" onclick="showPostTest()">انتقل إلى الاختبار البعدي</button>

</div>


        <!-- الاختبار البعدي -->
        <div class="content-box lesson-section" id="postTest" style="display:none;">
            <h2>الاختبار البعدي</h2>
            <form id="postTestForm">
                <div class="question">
                    <p>1. أي من الكواكب التالية يعد من الكواكب الداخلية؟</p>
                    <div class="options">
                        <label><input type="radio" name="post_q1" value="a" required> نبتون</label>
                        <label><input type="radio" name="post_q1" value="b"> الأرض</label>
                        <label><input type="radio" name="post_q1" value="c"> المشتري</label>
                    </div>
                </div>
                <button type="button" class="btn btn-success" onclick="finishLesson()">إنهاء الدرس</button>
            </form>
        </div>
        <div class=" ">
                <img src="in.png" class="img-fluid text-center" alt="">
            </div>
    </main>


    <footer class="main-footer">
        <p>جميع الحقوق محفوظة &copy; <span id="currentYear">2025</span> موقع تعليم الكواكب</p>
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
                    if (qBlock) qBlock.style.outline = '1px solid red';
                    setTimeout(() => {
                        if (qBlock) qBlock.style.outline = 'none';
                    }, 3000);
                }
                return;
            }
            document.getElementById('preTest').style.display = 'none';
            document.getElementById('lessonContent').style.display = 'block';
            document.getElementById('lessonContent').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function finishLesson() {
            const postTestForm = document.getElementById('postTestForm');
            if (!postTestForm.checkValidity()) {
                alert('الرجاء الإجابة على سؤال الاختبار البعدي أولاً.');
                const invalidInput = postTestForm.querySelector(':invalid');
                if (invalidInput) {
                    let qBlock = invalidInput.closest('.question');
                    if (qBlock) qBlock.style.outline = '1px solid red';
                    setTimeout(() => {
                        if (qBlock) qBlock.style.outline = 'none';
                    }, 3000);
                }
                return;
            }
            alert('أحسنت! لقد أكملت درس الكواكب الداخلية بنجاح.');
            window.location.href = 'lesson3.php';
        }
    </script>
</body>

</html>
