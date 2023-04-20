<?php
    function check_login($con) {
        if ($user_role="student") {
            // case of student
            if(isset($_SESSION['st_username']))
	{

		$id = $_SESSION['st_username'];
		$query = "select * from student where st_username = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

        } // end of role student
     
        // case of teacher
        if ($user_role="teacher") {
          
            if(isset($_SESSION['t_username']))
	{

		$id = $_SESSION['t_username'];
		$query = "select * from teacher where t_username = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

        } // end of role teacher


            // case of admin
            if ($user_role="admin") {
          
                if(isset($_SESSION['ad_username']))
        {
    
            $id = $_SESSION['ad_username'];
            $query = "select * from administrator where ad_username = '$id' limit 1";
    
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
    
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    
            } // end of role teacher
    
	//redirect to login
	header("Location: login.php");
	die;
    }
?>