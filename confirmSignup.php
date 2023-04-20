   <?php include 'head.php' ?>
   <title>Sign Up</title>
   <link rel="icon" href="assets/images/logo/Durar simplified - blue logo.png" type="image/x-icon">
   <link rel="stylesheet" href="assets/CSS/general.css">
   <link rel="stylesheet" href="assets/CSS/User/confirmUser.css">
</head>

<body dir=rtl>
   <div class="all signup">
      <div style="height: 100vh" class="right">
         <div class="right_elements">
            <img style="width: 100%; padding-bottom: 10px;" src="assets/images/signUp/Layer_1.png" alt="">
            <img style="width: 28%;" class="auth_icon" src="assets/images/logo/Durar - Dark blue logo.png" alt="">
            <p style="font-size: 36px;"> مرحبا بك في منصتنا <br> منصة دُرر </p>
         </div>
      </div>
      <div style="margin-top: -100px;" class=left>
         <div class="auth_container">
            <p style="color: var(--mainblue);" class="auth_title">
               إنشاء حساب 
            </p>
            <div style="border: 1px solid var(--mainblue); border-radius: 30px; padding: 10% 20%;">
            <p style="font-size: 28px; line-height: 37px; text-align: center">
               التحقق من أنك صاحب البريد
            </p>
            <p style="font-size: 20px; color:#636363; line-height: 37px; text-align: center">
               أدخل الكود الذي أرسلناه في بريدك الالكتروني:
            </p><br><br>
            <form action="pages/Student/main.php" method="post">
               <div dir="ltr" class="otp-bx">
                  <input type="text" pattern="[0-9]" maxlength="1" required>
                  <input type="text" pattern="[0-9]" maxlength="1" required>
                  <input type="text" pattern="[0-9]" maxlength="1" required>
                  <input type="text" pattern="[0-9]" maxlength="1" required>
                  <input type="text" pattern="[0-9]" maxlength="1" required>
                  <input type="text" pattern="[0-9]" maxlength="1" required>
               </div>
               <br><br>
               <div class="buttons">
                  <a style="padding: 16px; margin-left: 10px;" class="return_btn" href="signup.php">
                     العودة
                  </a>
                  <button style="margin-right: 10px;" type="submit">
                     التالي
                  </button>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div>

   <script src="js/code.js"></script>

</body>

</html>