<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trăc nghiệm online</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/webstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
		session_start();
		if($_POST['submit'])
		{
			$mhs=$_POST['mshocsinh'];
			$username=$_POST['tendk'];
			$displayname=$_POST['tenhocsinh'];
			$pass=$_POST['passhs'];
			
			include('dbconnect.php');
			$sql="SELECT * FROM user WHERE UserID = $mhs and RoleID = 1";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_array($query);
			$dem=mysqli_num_rows($query);
			if($dem == 1)
			{
				$sqlupdate = "UPDATE user SET UserName='$username' , Pass= '$pass' ,DisplayName='$displayname' WHERE UserID = $mhs and RoleID = 1 ";
				mysqli_query($conn,$sqlupdate); 
		?>
			<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block;">
				<div class="modal-dialog">
					<div class="modal-content">
					<p>Đăng ký thành công. Tài Khoản của bạn là:</p>
					<?php
						echo "<b>$username</b>";
						echo "</br>";
					?>
					<a href="http://goldmagic.club/New/index.php">Trang Chủ</a>
					</div>
				</div>
			</div>
		<?php
			}
			else
			{
				echo "Thất bại. Mã số giáo viên của bạn không đúng";
			}
		}
?>
</body>
</html>
		