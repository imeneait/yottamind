<?php
   session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];
      $user_role =$_POST['role'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
         if($user_role ="student") {
            $query = "select * from student where st_username = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['st_username'];
						header("Location: Student/main.php");
						die;
					}
				}
			}
      }	

       // Case of the teacher:
       if($user_role ="teacher") {
         $query = "select * from teacher where t_username = '$user_name' limit 1";
         $result = mysqli_query($con, $query);

      if($result)
      {
         if($result && mysqli_num_rows($result) > 0)
         {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {

               $_SESSION['user_id'] = $user_data['t_username'];
               header("Location: Teacher/main.php");
               die;
            }
         }
      }

   }	

      //Case of the administrator:
      if($user_role ="admin") {
         $query = "select * from administrator where ad_username = '$user_name' limit 1";
         $result = mysqli_query($con, $query);

      if($result)
      {
         if($result && mysqli_num_rows($result) > 0)
         {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {

               $_SESSION['user_id'] = $user_data['ad_username'];
               header("Location: Admin/main.php");
               die;
            }
         }
      }

   }	
      //end

      }
     
   }

?>


<div dir="rtl" class="modal_container" id="modal_container">
   <div style="border-radius: 30px; overflow: hidden" class="all modal">
      <div class="right">
         <div class="right_elements">
            <img style="width: 60%; padding-bottom: 10px;" src="assets/images/logo/Durar - Dark blue logo.png"
               alt="">
            <p style="font-size: 22px; padding-bottom: 20px"> جديد معنا؟ </p>
            <a style="font-size: 80%; padding: 4% 9%;" class="auth-btn" href="signup.php"> انشاء حساب </a>
         </div>
      </div>
      <div class="left signup">
         <form style="text-align: center" id="loginForm" method="POST">
            <p style="padding-top: 30px; font-size: 20px; float: right;"> مرحبا بك </p>
            <label for="username">
               <input type="text" name="username" id="username" placeholder="أدخل اسم المستخدم" required>
            </label>
            <label for="password">
               <input type="password" name="password" id="password" placeholder="أدخل كلمة المرور" required>
            </label>
            <label for="role">
               <select name="role" id="loginRole" placeholder="اختر دورك" required>
                  <option value="" disabled selected> اختر دورك </option>
                  <option value="student"> تلميذ </option>
                  <option value="teacher"> أستاذ </option>
                  <option value="admin"> مشرف </option>
               </select>
            </label>
            <a style="font-size: 16px; text-decoration: none; float: left;" href="link">نسيت كلمة
               المرور؟</a><br><br><br>
            <button style="font-family: 'Cairo';" class="next_btn" type="submit"> الدخول </button>          
            <a id="close" style="font-size: 16px; margin-right: 5px" class="return_btn" href="#"> العودة </a>
         </form>
      </div>
   </div>
</div>

<script src="js/loginForm.js"></script>
