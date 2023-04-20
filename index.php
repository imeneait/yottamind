<?php 
   session_start();
   include 'head.php' ;
   include("connection.php");
   include("functions.php");

   $user_data =check_login($con);

   
   ?>
   <title>Durar</title>
   <link rel="icon" href="assets/images/logo/Durar simplified - blue logo.png" type="image/x-icon">
   <link rel="stylesheet" href="assets/CSS/general.css">
   <link rel="stylesheet" href="assets/CSS/authentication.css">
   <link rel="stylesheet" href="assets/CSS/landingPage.css">
   <link rel="stylesheet" href="assets/CSS/footer.css">   
</head>

<body>
   <!--The header (top of the page) which will contain the navbar-->
   <?php include 'view/visitorNav.php' ?>

   <!--The main page, will contain each section separately-->
   <main>
      <!--Header, description for the website-->
      <section class="technical_info" id="technical_info">
         <div class="elements">
            <img src="assets/images/LandingPage/BismiAllah.png" alt="">
            <p class="Head_title"> موقع درر </p>
            <p class="description"> الموقع عبارة عن منصة إلكترونية تساعد الأساتذة والأستاذات, المرشدين والمرشدات على
               تنظيم الحلقة أو الفوج و
               مراقبة تطور طلبتهم سواء في حفظ القرآن او تعلم الأحكام او غير ذلك. </p>
            <ul>
               <li class="Log_in">
                  <a id="login_link" class="third-btn" href="#"> تسجيل الدخول </a>
               </li>
               <li class="sign_up">
                  <a class="primary-btn" href="signup.php"> انضم الينا </a>
               </li>
            </ul>
         </div>
      </section>

      <!--Specifications of the software-->
      <section class="specifications" id="specifications">
         <div align="center" class="title">
            <h1> مميزات الموقع </h1>
         </div>
         <div class="specs">
            <div class="right_specs">
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> تنظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة </p>
               </div>
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> تنظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة </p>
               </div>
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> نظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة 
                  </p>
               </div>
            </div>
            <div class="left_specs">
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> تنظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة </p>
               </div>
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> تنظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة </p>
               </div>
               <div class="spec">
                  <img style="width: 64px; height: 60px; padding: 12px 16px 0 0;" src="assets/images/LandingPage/section 2 decoration.png" alt="">
                  <p> نظيم استجوابات إلكترونية (على شكل أسئلة اخ إلكترونية (على شكل أسئلة اختيار من متعدد) لتيار من
                     متعدد) لامتحان الطلبة  </p>
               </div>
            </div>
         </div>
      </section>

      <section class="Users" id="users">
         <div class="Users-up">
            <div class="Users-up-text">
               <p class="Users-up-h">مستخدمي الموقع</p>
               <p class="Users-up-t">يوفر النظام خدمات ومزايا عديدة لمختلف مستخدميه.</p>
            </div>
         </div>

         <div class="Users-down">
            <div class="Users-down-elements">
               <div class="Users-down--pic">
                  <img src="assets/images/LandingPage/Admin.png">
               </div>
               <div class="Users-down--text">
                  <p class="Users-down--text-h">المشرفين</p>
                  <p class="Users-down--text-t">يشرف على إدارة المدرسة القرآنية وتسيير شؤون المعلمين والطلبة، وكذا جدولة
                     الأقسام والحلقات</p>
               </div>
            </div>

            <div class="Users-down-element">
               <div class="Users-down--pic">
                  <img src="assets/images/LandingPage/Teacher.png">
               </div>
               <div class="Users-down--text">
                  <p class="Users-down--text-h">المعلمين</p>
                  <p class="Users-down--text-t">يشرف على تسيير شؤون الحلقات ومتابعة حفظ الطلبة وتقدمهم وكذا سيرورة
                     وتقييم الامتحانات</p>
               </div>
            </div>

            <div class="Users-down-element">
               <div class="Users-down--pic">
                  <img src="assets\images\LandingPage\Students.png">
               </div>
               <div class="Users-down--text">
                  <p class="Users-down--text-h">الطلبة</p>
                  <p class="Users-down--text-t">يُتابع من طرف المشرفين والأساتذة ويستفيد من مزايا الجولة وتنظيم الحلقات
                     والدروس الأسبوعية</p>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!--The footer for the personal information-->
   <?php include 'view/footer.html' ?>

   <!-- Logging in modal -->
   <?php include 'login.php' ?>

   <script src="js/loginModal.js"></script>
</body>

</html>