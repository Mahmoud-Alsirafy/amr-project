<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدرس الأول - مقدمة عن الكواكب</title>
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
        <div class="content-box lesson-section" id="preTest">
            <h2>الاختبار القبلي</h2>
            <form id="preTestForm">
                <div class="question">
                    <p>1. ما هو الكوكب؟</p>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a" required> نجم يصدر ضوءه الخاص</label>
                        <label><input type="radio" name="q1" value="b"> جرم سماوي يدور حول نجم وله جاذبية تكفي ليأخذ شكلًا كرويًا</label>
                        <label><input type="radio" name="q1" value="c"> مذنب يتكون من ثلج وغبار</label>
                    </div>
                </div>
                <button type="button" class="btn" onclick="showLesson()">بدء الدرس</button>
            </form>
        </div>
        <div class="content-box lesson-section" id="lessonContent" >
        <h2 class="text-dark">الدرس الأول: مقدمة عن الكواكب</h2>
        <div class="lesson-content">
            <p>الكواكب هي أجسام سماوية كبيرة تدور حول النجوم بسبب قوة الجاذبية. في نظامنا الشمسي، تدور الكواكب حول الشمس، وتُعد هذه الأجسام جزءًا من عائلة أكبر تشمل أيضًا الأقمار، الكويكبات، والمذنبات.</p>

            <p>تتميز الكواكب بأنها لا تُصدر ضوءًا من نفسها، بل تعكس ضوء النجم الذي تدور حوله. وتختلف الكواكب في العديد من الخصائص مثل الحجم، التركيب، وعدد الأقمار، ووجود الغلاف الجوي.</p>

            <p>في نظامنا الشمسي، توجد ثمانية كواكب رئيسية، وتنقسم إلى قسمين رئيسيين:</p>

            <ul>
                <li><strong>الكواكب الصخرية:</strong> وهي الكواكب الأقرب إلى الشمس وتتميز بسطح صلب، مثل:
                    <ul>
                        <li>عطارد</li>
                        <li>الزهرة</li>
                        <li>الأرض</li>
                        <li>المريخ</li>
                    </ul>
                </li>
                <li><strong>الكواكب الغازية (العملاقة):</strong> وهي الأكبر حجمًا وتتكون أساسًا من الغازات، مثل:
                    <ul>
                        <li>المشتري</li>
                        <li>زحل</li>
                        <li>أورانوس</li>
                        <li>نبتون</li>
                    </ul>
                </li>
            </ul>

            <p>كل كوكب في المجموعة الشمسية له خصائص فريدة، فمثلًا:</p>
            <ul>
                <li><strong>الأرض</strong> هو الكوكب الوحيد المعروف بوجود حياة عليه.</li>
                <li><strong>المشتري</strong> هو أكبر كواكب المجموعة الشمسية وله أكثر من 70 قمرًا.</li>
                <li><strong>زحل</strong> يتميز بحلقاته الرائعة المصنوعة من الجليد والغبار.</li>
            </ul>

            <p>فهمنا للكواكب يساعدنا في اكتشاف الكون من حولنا ومعرفة المزيد عن أصل الأرض والحياة.</p>
        </div>
        <button type="button" class="btn" onclick="showPostTest()">انتقل إلى الاختبار البعدي</button>

        </div>


        <div class="content-box lesson-section" id="postTest" style="display:none;">
            <h2>الاختبار البعدي</h2>
            <form id="postTestForm">
                <div class="question">
                    <p>1. أي من التالي يعتبر من كواكب المجموعة الشمسية؟</p>
                    <div class="options">
                        <label><input type="radio" name="post_q1" value="a" required> القمر</label>
                        <label><input type="radio" name="post_q1" value="b"> نبتون</label>
                        <label><input type="radio" name="post_q1" value="c"> الشمس</label>
                    </div>
                </div>
                <button type="button" class="btn btn-success" onclick="finishLesson()">إنهاء الدرس</button>
            </form>
        </div>

        <div class=" ">
            <img src="home.jpg" class="img-fluid text-center" alt="">
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
            alert('أحسنت! لقد أكملت درس مقدمة عن الكواكب بنجاح.');
            window.location.href = 'lesson2.php';
        }
    </script>
</body>

</html>