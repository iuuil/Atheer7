<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>يلا نزرع</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the CSS file -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=nature_people" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=nature_people" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&family=Charmonman:wght@400;700&family=Fuggles&family=Pacifico&display=swap" rel="stylesheet">
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link id="theme-style" rel="stylesheet" href="css/light.css"> <!-- Default to light mode -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Aref+Ruqaa:wght@400;700&family=Charmonman:wght@400;700&family=Fuggles&family=Lalezar&family=Pacifico&display=swap" rel="stylesheet">

</head>

<body> 

    <header class="headerr" dir='rtl' lang='ar'>

        <div class="logo-and-name">
            <div class="logo">
                <a href="homepage.html"><img src="photos/trees.png" alt="يلا نزرع Logo"></a> <!-- Replace with your logo path -->
            </div>
            <div>
                <a href="homepage.html" class="site-name">يلا نزرع</a> <!-- Changed from p to a -->
            </div>
        </div>

        <div class="bar">
            <nav class="navbar">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#">مُساهمة المجتمع</a>
                        <ul class="dropdown">
                            <li><a href="donations.html">التّبرعات</a></li>
                            <li><a href="volunteers.html">التّطوّع</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">المُجتمع</a>
                        <ul class="dropdown">
                            <li><a href="game.html">اللّعبة</a></li>
                            <li><a href="#about-us">مَن نحن !؟</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">حملات التّشجير</a>
                        <ul class="dropdown">
                            <li><a href="mapy.html">الخريطة</a></li>
                            <li><a href="currentcampaign.html">الحملات الحاليّة</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Buttons for Sign Up and Log In -->
        <div class="auth-buttons">

            <div class="search-container">
                <input type="text" class="search-box" placeholder="ابحث هنا...">
                <button class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <a href="signup.php"><button class="sign-up-button-bar">تسجيل الدخول</button></a>
        </div>

        <div class="stting-icon" id="setting-icon">
            <i class="fa-solid fa-ellipsis-vertical setting-icon" style="color: black; font-size: 44px;"></i>
        </div>
    
    </header>

    <div id="sidebar" class="sidebar" dir='rtl' lang='ar'>
        <ul>
            <div class="useraccount">
                <i class="fa-solid fa-user-gear" style="color: black; font-size: 24px; cursor: pointer;">
                    <a href="profile.html" class="ps">الحساب</a>
                </i>
            </div>
            <hr>
            <li><a href="#">الإشعارات</a></li>
        </ul>

        <div class="mode-icons">
            <i id="dark-mode-icon" class="fa-regular fa-moon" style="color: black; font-size: 24px; cursor: pointer;" title="Switch to Dark Mode"></i>
            <i id="light-mode-icon" class="fa-solid fa-sun-plant-wilt" style="color: black; font-size: 24px; cursor: pointer; display: none;" title="Switch to Light Mode"></i>
        </div>
    </div>

    <section class="login-section" dir="rtl" lang="ar">
        <div class="login-container">
            <form action="login_process.php" method="POST" class="login-form">
                <h2 style="text-align:center;">تسجيل الدخول</h2>

                <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" id="email" name="email" class="login-input" required placeholder="أدخل بريدك الإلكتروني">
                </div>

                <div class="form-group">
                    <label for="password">كلمة المرور:</label>
                    <input type="password" id="password" name="password" class="login-input" required placeholder="أدخل كلمة المرور">
                </div>

                <div class="form-group button-group">
                    <button type="submit" class="login-button">تسجيل الدخول</button>
                </div>

                <!-- عرض رسالة الخطأ -->
                <?php if (isset($_SESSION['login_error'])): ?>
                    <p style="color: red; text-align: center;">
                        <?php 
                            echo $_SESSION['login_error']; 
                            unset($_SESSION['login_error']);
                        ?>
                    </p>
                <?php endif; ?>

                <p style="text-align:center;">ليس لديك حساب؟ <a href="signup.php">أنشئ حساب جديد</a></p>
            </form>
        </div>
    </section>

<section class="about-us-section" id="about-us" dir="rtl" lang="ar">
        <h2>عنّا</h2>
    
        <div class="about-content">
            <div class="about-item">
                <h3>مهمّتنا</h3>
                <p>مهمتنا هي جعل العالم مكانًا أكثر اخضرارًا من خلال الممارسات المستدامة والمشاركة المجتمعية.</p>
            </div>
    
            <div class="about-item">
                <h3>تعرّف أكثر على فريقنا</h3>
                <p>فريقنا ملتزم بتعزيز المبادرات الخضراء وتشجيع المشاركة المجتمعية.</p>
            </div>
    
            <div class="about-item">
                <h3>ابقَ على اطلاع بأخبارنا</h3>
                <p>اتصل بنا لأي استفسارات أو للبقاء على اطلاع بأحدث أخبارنا.</p>
            </div>
    
            <div class="about-item">
                <h3>تابعنا عبر وسائل التواصل الاجتماعي</h3>
                <ul>
                    <li><a href="https://www.facebook.com" target="_blank">فيسبوك</a></li>
                    <li><a href="https://twitter.com" target="_blank">تويتر</a></li>
                    <li><a href="https://www.linkedin.com" target="_blank">لينكد إن</a></li>
                    <li><a href="https://www.instagram.com" target="_blank">إنستغرام</a></li>
                </ul>
            </div>
    
            <div class="about-item">
                <h3>الدمج</h3>
                <ul>
                    <li><a href="#">المنتج</a></li>
                    <li><a href="#">التطوّع</a></li>
                    <li><a href="#">التسعير</a></li>
                </ul>
            </div>
    
            <div class="about-item">
                <h3>الشؤون القانونية</h3>
                <ul>
                    <li><a href="#">سياسة الخصوصية</a></li>
                    <li><a href="#">شروط الخدمة</a></li>
                </ul>
            </div>
        </div>
    </section>

<footer>
    <p>&copy; CopyRight</p>
</footer>

<script src="js/scriptdarklightmode.js"></script>
<script src="js/scriptsidebar.js"></script>

</body>
</html>
