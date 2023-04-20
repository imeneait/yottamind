   <?php include 'head.php' ?>
   <title>Sign Up</title>
   <link rel="icon" href="assets/images/logo/Durar simplified - blue logo.png" type="image/x-icon">
   <link rel="stylesheet" href="assets/CSS/general.css">
   <link rel="stylesheet" href="assets/CSS/authentication.css">
</head>

<body dir="rtl">
   <div class="all signup">
      <div class="right">
         <div class="right_elements">
            <img style="width: 100%; padding-bottom: 10px;" src="assets/images/signUp/Layer_1.png" alt="">
            <img style="width: 28%;" class="auth_icon" src="assets/images/logo/Durar - Dark blue logo.png" alt="">
            <p style="font-size: 36px;"> مرحبا بك في منصتنا <br> منصة دُرر </p>
            <p style="font-size: 16px; padding-bottom: 10px;"> لديك حساب بالفعل؟ </p>
            <a id="login_link" class="auth-btn third-btn" href="#"> تسجيل الدخول </a>
         </div>
      </div>
      <div class="left left_extra">
         <form action="confirmSignup.php" method="POST">
            <p class="form_title"> إنشاء حساب  </p>
            <label for="username">
               <input type="text" name="username" id="username" placeholder="أدخل اسم المستخدم" required>
            </label>
            <label for="firstname">
               <input type="text" name="firstname" id="firstname" placeholder="أدخل اسمك الشخصي" required>
            </label>
            <label for="lastname">
               <input type="text" name="lastname" id="lastname" placeholder="أدخل اسم العائلة" required>
            </label>
            <label for="gender">
               <select name="gender" id="gender" required>
                  <option value="" disabled selected> الجنس </option>
                  <option value="male"> ذكر </option>
                  <option value="female"> أنثى </option>
               </select>
            </label>
            <label for="email">
               <input type="email" name="email" id="email" placeholder="أدخل بريدك الالكتروني" required>
            </label>
            <div class="country_number">
               <label for="country">
                  <select name="country" id="country" required>
                     <!--VALUES here-->
                     <option value="" disabled selected> أدخل بلد إقامتك </option>
                     <option value=""> ALG </option>
                     <option value=""> MOR </option>
                     <option value=""> TUN </option>
                  </select>
               </label>
               <label for="number">
                  <input type="number" name="number" id="number" placeholder="أدخل رقم هاتفك" required>
               </label>
            </div>
            <label for="role">
               <select name="role" id="role" placeholder="اختر دورك" required>
                  <option value="" disabled selected> اختر دورك </option>
                  <option value="student"> تلميذ </option>
                  <option value="teacher"> أستاذ </option>
                  <option value="admin"> مشرف </option>
               </select>
            </label>
            <label for="password">
               <input type="password" name="password" id="password" placeholder="أدخل كلمة المرور" required>
            </label>
            <label for="confirm_pass">
               <input type="password" name="confirm_pass" id="confirm_pass" placeholder="قم بتأكيد كلمة المرور" required>
            </label>
            <div class="buttons">
               <a style="padding: 16px;" class="return_btn" href="index.php">
                  العودة
               </a>
               <button style="font-family: 'Cairo';" class="next_btn" type="submit">
                  التالي
               </button>
            </div>
         </form>
      </div>
   </div>

   <!--THE MODAL OF LOGGING IN-->
   <?php include 'login.php' ?>
   <script src="js/loginModal.js"></script>
</body>

</html>