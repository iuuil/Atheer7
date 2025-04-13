<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إنشاء حساب - يلا نزرع</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body dir="rtl">

<header class="headerr">
    <!-- نفس الهيدر السابق بدون تغيير -->
</header>

<div class="sidebar">
    <!-- نفس السايد بار السابق بدون تغيير -->
</div>

<section class="signup-section">
    <div class="signup-container">
        <form action="signup_process.php" method="POST" enctype="multipart/form-data" class="signup-form">
            <div class="form-group">
                <label for="full-name">أدخل اسمك الكامل</label>
                <input type="text" name="full_name" id="full-name" class="signup-input" placeholder="الاسم الكامل" required>
            </div>

            <div class="form-group">
                <label for="email">أدخل بريدك الإلكتروني</label>
                <input type="email" name="email" id="email" class="signup-input" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="form-group">
                <label for="password">أدخل كلمة المرور</label>
                <input type="password" name="password" id="password" class="signup-input" placeholder="كلمة المرور" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">تأكيد كلمة المرور</label>
                <input type="password" name="confirm_password" id="confirm-password" class="signup-input" placeholder="تأكيد كلمة المرور" required>
            </div>

            <div class="form-group location-group">
                <div class="phone-input">
                    <label for="phone">رقم الهاتف</label>
                    <div class="phone-country-container">
                        <select name="country" id="country" class="signup-select country-select" required>
                            <option value="">الدولة</option>
                            <option value="العراق">العراق</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                        <input type="tel" name="phone" id="phone" class="signup-input phone-input-box" placeholder="رقم الهاتف" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="city">اختر مدينتك</label>
                <select name="city" id="city" class="signup-select" required>
                    <option value="">اختر المدينة</option>
                    <option value="بغداد">بغداد</option>
                    <option value="البصرة">البصرة</option>
                </select>
            </div>

            <!-- صورة الملف الشخصي -->
            <div class="form-group">
                <label>اختر صورة ملفك الشخصي</label>
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" required />
                        <label for="imageUpload"><i class="fas fa-edit"></i></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-color: black;"></div>
                    </div>
                </div>
            </div>

            <div class="form-group button-group">
                <button type="submit" class="create-account-button">إنشاء حساب</button>
            </div>

            <div class="login-message">
                <p>لديك حساب بالفعل؟ <a href="login.php" class="login-link">تسجيل الدخول</a></p>
            </div>
        </form>
    </div>
</section>

<section class="about-us-section" id="about-us">
    <!-- نفس قسم عنّا بدون تغيير -->
</section>

<script src="js/scriptdarklightmode.js"></script>
<script src="js/scriptsidebar.js"></script>
<script src="js/scriptuploadavatar.js"></script>

<footer>
    <p>&copy; CopyRight</p>
</footer>

</body>
</html>
