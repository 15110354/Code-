<?php
 session_start();
 if($_POST['submit'])
 {
    if($_POST['form-username']==NULL)
    {
          session_start();
			$_SESSION['fail']='a';
			include("index.php");
    }
    else
    {
            $user = $_POST['form-username'];
    }
    if($_POST['form-password']==NULL)
    {
           session_start();
			$_SESSION['fail']='a';
			include("index.php");
    }
    else{
          $pass = $_POST['form-password'];  
    }
    if($user&&$pass)
    {
        include('dbconnect.php');

        $sql="SELECT * FROM user WHERE UserName = '$user' And Pass='$pass'";
		$query = mysqli_query($conn, $sql);
		$result = mysqli_fetch_array($query);
		
		$dem=mysqli_num_rows($query);
        if($dem == 1)
		{
			session_start();
            //session_register("user_id");
            //session_register("user_name");
            //session_register("DisplayName");
            //session_register("type_account");
			$_SESSION['user_name'] = $user;
			$_SESSION['DisplayName'] = $result['DisplayName'];
			$_SESSION['type_account'] = $result['RoleID'];
			$_SESSION['user_id'] = $result['UserID'];
			
			 mysqli_close($conn);
			header("Location: default.php?url=trangchulogin.php");
		}
		else
		{
			session_start();
			$_SESSION['fail']='a';
			include("index.php");
		}
   }
 }

?>