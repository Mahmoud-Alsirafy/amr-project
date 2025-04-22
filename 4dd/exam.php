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
    <title>الاختبار الشامل - الكواكب الداخلية والخارجية</title>
    <link rel="stylesheet" href="styles.css?v=2">
    <style>
        .question h3{
             color: #000;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <nav class="main-nav">
            <a href="main.php" class="site-title">موقع تعليم الفضاء</a>
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
            <h1>الاختبار الشامل - الكواكب الداخلية والخارجية</h1>
            <form id="examForm" onsubmit="return checkAnswers(event)">
                <div class="content-box question">
                    <h3>1. ما هي الكواكب الداخلية في النظام الشمسي؟</h3>
                    <div class="options">
                        <label for="q1a"><input type="radio" id="q1a" name="q1" value="a"> <span>عطارد، الزهرة، الأرض، المريخ</span></label>
                        <label for="q1b"><input type="radio" id="q1b" name="q1" value="b" required> <span>المشتري، زحل، أورانوس، نبتون</span></label>
                        <label for="q1c"><input type="radio" id="q1c" name="q1" value="c"> <span>المريخ، زحل، الأرض، نبتون</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>2. أي من الكواكب التالية هو أكبر كوكب في النظام الشمسي؟</h3>
                    <div class="options">
                        <label for="q2a"><input type="radio" id="q2a" name="q2" value="a"> <span>الأرض</span></label>
                        <label for="q2b"><input type="radio" id="q2b" name="q2" value="b" required> <span>المشتري</span></label>
                        <label for="q2c"><input type="radio" id="q2c" name="q2" value="c"> <span>زحل</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>3. ما هو الكوكب الذي يُعرف باسم "الكوكب الأحمر"؟</h3>
                    <div class="options">
                        <label for="q3a"><input type="radio" id="q3a" name="q3" value="a"> <span>الأرض</span></label>
                        <label for="q3b"><input type="radio" id="q3b" name="q3" value="b"> <span>المريخ</span></label>
                        <label for="q3c"><input type="radio" id="q3c" name="q3" value="c" required> <span>عطارد</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>4. أي كوكب يُعد أكبر الكواكب الغازية؟</h3>
                    <div class="options">
                        <label for="q4a"><input type="radio" id="q4a" name="q4" value="a" required> <span>المشتري</span></label>
                        <label for="q4b"><input type="radio" id="q4b" name="q4" value="b"> <span>نبتون</span></label>
                        <label for="q4c"><input type="radio" id="q4c" name="q4" value="c"> <span>زحل</span></label>
                    </div>
                </div>
                
                <div class="content-box question">
                    <h3>5. أي الكواكب التالية هو أبعد عن الشمس؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q5" value="a" required> <span>نبتون</span></label>
                        <label><input type="radio" name="q5" value="b"> <span>المشتري</span></label>
                        <label><input type="radio" name="q5" value="c"> <span>زحل</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>6. أي كوكب يُعتبر أقرب كوكب إلى الشمس؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q6" value="a" required> <span>عطارد</span></label>
                        <label><input type="radio" name="q6" value="b"> <span>الزهرة</span></label>
                        <label><input type="radio" name="q6" value="c"> <span>المريخ</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>7. أي من الكواكب التالية يُعد كوكب غازي؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q7" value="a" required> <span>الأرض</span></label>
                        <label><input type="radio" name="q7" value="b"> <span>عطارد</span></label>
                        <label><input type="radio" name="q7" value="c"> <span>زحل</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>8. ما هو الكوكب الذي لديه أطول يوم؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q8" value="a" required> <span>المشتري</span></label>
                        <label><input type="radio" name="q8" value="b"> <span>الزهرة</span></label>
                        <label><input type="radio" name="q8" value="c"> <span>نبتون</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>9. أي من الكواكب لديه أكبر عدد من الأقمار؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q9" value="a" required> <span>المشتري</span></label>
                        <label><input type="radio" name="q9" value="b"> <span>زحل</span></label>
                        <label><input type="radio" name="q9" value="c"> <span>أورانوس</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>10. ما هو الكوكب الذي يحتوي على أكبر عاصفة في النظام الشمسي؟</h3>
                    <div class="options">
                        <label><input type="radio" name="q10" value="a" required> <span>المشتري</span></label>
                        <label><input type="radio" name="q10" value="b"> <span>زحل</span></label>
                        <label><input type="radio" name="q10" value="c"> <span>المريخ</span></label>
                    </div>
                </div>
                <div id="sbu"> <button type="submit" class="btn btn-lg">إنهاء الاختبار</button>
                </div>
                </form>

                <div id="result"></div>
        </div>
    </main>

    <footer class="main-footer">
        <p>جميع الحقوق محفوظة &copy; <span id="currentYear">2025</span> موقع تعليم الفضاء</p>
    </footer>

    

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();

function logout() {
    window.location.href = 'index.php';
}

function checkAnswers(event) {
    event.preventDefault();
    const correctAnswers = {
        q1: "a",
        q2: "b",
        q3: "b",
        q4: "a",
        q5: "a",
        q6: "a",
        q7: "c",
        q8: "b",
        q9: "a",
        q10:"a"
    };

    let score = 0;
    let total = Object.keys(correctAnswers).length;
    let allAnswered = true;
    const form = document.getElementById('examForm');

    for (let i = 0; i < form.elements.length; i++) {
        const element = form.elements[i];
        if (element.type === 'radio' && element.required) {
            const groupName = element.name;
            if (!form.querySelector(`input[name="${groupName}"]:checked`)) {
                allAnswered = false;
                let questionBlock = element.closest('.question');
                if (questionBlock) {
                    questionBlock.style.borderColor = 'var(--error-color)';
                    setTimeout(() => { questionBlock.style.borderColor = ''; }, 3000);
                    questionBlock.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                break;
            }
        }
    }

    if (!allAnswered) {
        alert("الرجاء الإجابة على جميع الأسئلة قبل الإنهاء.");
        return false;
    }

    for (let question in correctAnswers) {
        const selected = form.querySelector(`input[name="${question}"]:checked`);
        if (selected.value === correctAnswers[question]) {
            score++;
        }
    }

    const percentage = (score / total) * 100;
    const resultDiv = document.getElementById('result');
    resultDiv.style.display = 'block';
    resultDiv.scrollIntoView({ behavior: 'smooth' });

    if (percentage >= 75) {
        resultDiv.className = 'success';
        resultDiv.innerHTML = `
            <h2>تهانينا! 🎉</h2>
            <p>لقد اجتزت الاختبار بنجاح.</p>
            <p><strong>النتيجة: ${score} من ${total} (${percentage.toFixed(0)}%)</strong></p>
            <button onclick="window.location.href='main.php'" class="btn btn-success">العودة للصفحة الرئيسية</button>
        `;
    } else {
        resultDiv.className = 'failure';
        resultDiv.innerHTML = `
            <h2>للأسف! 😞</h2>
            <p>تحتاج إلى مراجعة الدروس مرة أخرى.</p>
            <p><strong>النتيجة: ${score} من ${total} (${percentage.toFixed(0)}%)</strong></p>
            <button onclick="window.location.href='lesson1.php'" class="btn btn-secondary">مراجعة الدروس</button>
        `;
    }

    const formElements = form.elements;
    for (let i = 0; i < formElements.length; i++) {
        formElements[i].disabled = true;
    }

    return false;
}

    </script>
</body>

</html>