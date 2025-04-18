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
    <title>الاختبار الشامل - تصميم موحد</title>
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
                <button class="logout-btn" onclick="logout()">خروج</button>
            </div>
        </nav>
    </header>

    <main>
        <div class="content-box">
            <h1>الاختبار الشامل</h1>
            <form id="examForm" onsubmit="return checkAnswers(event)">
                <div class="content-box question">
                    <h3>1. ما هو تعريف الهندسة؟</h3>
                    <div class="options">
                         <label for="q1a"><input type="radio" id="q1a" name="q1" value="a"> <span>علم الرياضيات فقط</span></label>
                        <label for="q1b"><input type="radio" id="q1b" name="q1" value="b" required> <span>علم تطبيق الرياضيات والعلوم لحل المشكلات العملية</span></label>
                        <label for="q1c"><input type="radio" id="q1c" name="q1" value="c"> <span>فن البناء فقط</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>2. ما هي المجالات الرئيسية للهندسة؟</h3>
                    <div class="options">
                        <label for="q2a"><input type="radio" id="q2a" name="q2" value="a"> <span>الهندسة المدنية فقط</span></label>
                        <label for="q2b"><input type="radio" id="q2b" name="q2" value="b" required> <span>الهندسة المدنية والميكانيكية والكهربائية والكيميائية</span></label>
                        <label for="q2c"><input type="radio" id="q2c" name="q2" value="c"> <span>الهندسة المعمارية فقط</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>3. ما هي أهم مهارات المهندس؟</h3>
                    <div class="options">
                        <label for="q3a"><input type="radio" id="q3a" name="q3" value="a"> <span>المهارات الفنية فقط</span></label>
                        <label for="q3b"><input type="radio" id="q3b" name="q3" value="b"> <span>مهارات التواصل فقط</span></label>
                        <label for="q3c"><input type="radio" id="q3c" name="q3" value="c" required> <span>المهارات الفنية والتحليلية ومهارات التواصل وحل المشكلات</span></label>
                    </div>
                </div>

                <div class="content-box question">
                    <h3>4. لماذا تعتبر مهارات التواصل مهمة للمهندس؟</h3>
                    <div class="options">
                        <label for="q4a"><input type="radio" id="q4a" name="q4" value="a" required> <span>للتواصل مع العملاء والزملاء وشرح الحلول الفنية</span></label>
                        <label for="q4b"><input type="radio" id="q4b" name="q4" value="b"> <span>للكتابة فقط</span></label>
                        <label for="q4c"><input type="radio" id="q4c" name="q4" value="c"> <span>ليست مهمة للمهندس</span></label>
                    </div>
                </div>
                <div id="sbu"> <button type="submit" class="btn btn-lg">إنهاء الاختبار</button>
                </div>
            </form>

            <div id="result"></div>
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

        function checkAnswers(event) {
            event.preventDefault();
            const correctAnswers = {
                q1: 'b',
                q2: 'b',
                q3: 'c',
                q4: 'a'
            };

            let score = 0;
            let total = Object.keys(correctAnswers).length;
            let allAnswered = true;
            const form = document.getElementById('examForm');

            // Check if all required questions are answered
            for (let i = 0; i < form.elements.length; i++) {
                const element = form.elements[i];
                if (element.type === 'radio' && element.required) {
                    const groupName = element.name;
                    if (!form.querySelector(`input[name="${groupName}"]:checked`)) {
                        allAnswered = false;
                        // Highlight the first unanswered question block
                        let questionBlock = element.closest('.question');
                        if (questionBlock) {
                             questionBlock.style.borderColor = 'var(--error-color)';
                             setTimeout(() => { questionBlock.style.borderColor = ''; }, 3000);
                             questionBlock.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                        break; // Stop checking after finding the first unanswered
                    }
                }
            }

             if (!allAnswered) {
                 alert("الرجاء الإجابة على جميع الأسئلة قبل الإنهاء.");
                 return false; // Stop submission
             }

            // Calculate score
            for (let question in correctAnswers) {
                const selected = form.querySelector(`input[name="${question}"]:checked`);
                // No need to check if selected here because we already validated above
                if (selected.value === correctAnswers[question]) {
                    score++;
                }
            }

            const percentage = (score / total) * 100;
            const resultDiv = document.getElementById('result');
            resultDiv.style.display = 'block';
            resultDiv.scrollIntoView({ behavior: 'smooth' }); // Scroll to show result

            if (percentage >= 75) {
                resultDiv.className = 'success'; // Use class for styling
                resultDiv.innerHTML = `
                    <h2>تهانينا! &#x1F389;</h2>
                    <p>لقد اجتزت الاختبار بنجاح.</p>
                    <p><strong>النتيجة: ${score} من ${total} (${percentage.toFixed(0)}%)</strong></p>
                    <button onclick="window.location.href='main.php'" class="btn btn-success">العودة للصفحة الرئيسية</button>
                `;
            } else {
                resultDiv.className = 'failure'; // Use class for styling
                resultDiv.innerHTML = `
                    <h2>للأسف! &#x1F61E;</h2>
                    <p>تحتاج إلى مراجعة الدروس مرة أخرى.</p>
                    <p><strong>النتيجة: ${score} من ${total} (${percentage.toFixed(0)}%)</strong></p>
                    <button onclick="window.location.href='lesson1.php'" class="btn btn-secondary">مراجعة الدروس</button>
                `;
            }

            // Disable form inputs after submission
            const formElements = form.elements;
            for (let i = 0; i < formElements.length; i++) {
                formElements[i].disabled = true;
            }

            return false; // Prevent default form submission behavior
        }
    </script>
</body>
</html>