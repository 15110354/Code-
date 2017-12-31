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
	<div class="container">
	<div class="top">
	   <?php
	    include_once('header_TrangChu.php');
	    ?>
	</div>
		<div class="row">
		<form action="login_check.php" method="post" name="login_form" >
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Đăng nhập</h3>
							<p>Nhập tên đăng nhập</p>
						</div>
						<div class="form-top-right">
							<div class="key">
								<img src="image/key.PNG" alt="">
							</div>
						</div>
					</div>
					<div class="form-bottom">
						<form class="login-from" role="form" action="" method="post">
							<div class="form-group">
								<label class="sr-only" for="form-username">Nhập tên đăng nhập</label>
								<input id="TxtSodienthoai" class="form-username form-control" autofocus=""
								onkeypress="handleKeyPress(event)" name="form-username" placeholder="Tên đăng nhập"
								type="text">
							</div>

							<div class="form-group">
								<label class="sr-only" for="form-password">Mật Khẩu</label>
								<input id="TxtMatKhau" class="form-password form-control" name="form-password" placeholder="Mật khẩu..." onkeypress="handleKeyPress(event)" type="password">
							</div>
							
<?php
	session_start();
	if(isset($_SESSION['fail']))
	{
		include("asd.php");
	}
unset($_SESSION['fail']);	
?>
							<input type="submit" id="submit" name="submit" style="color:black; padding:15px 169px;color:#004fa9; font-size:14px" value="Đăng nhập">
						</form>
					</div>
				</div>
			</div>

		</form>
		
		
		
			<div class="col-sm-1 middle-border"></div>
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Đăng ký tài khoản</h3>
							<p>Đăng ký tài khoản giáo viên, hoặc học sinh</p>
						</div>
						<div class="form-top-right">
							<div class="fa fa-pencil">
								<img src="image/dangky.PNG" alt="">
							</div>	
						</div>
					</div>
					<div class="form-bottom">
						<a class="btn btn-sm btn-primary btn-block" href="#" data-toggle="modal"  style="font-size:  18px" data-target="#myModal2">Đăng ký tài khoản giáo viên</a>
						<a class="btn btn-sm btn-primary btn-block" href="#" data-toggle="modal" style="font-size:  18px" data-target="#myModal">Đăng ký tài khoản học sinh</a>
						<a class="btn btn-sm btn-success btn-block" href="#" style="font-size:  18px" data-target="">Học sinh tra cứu điểm thi</a>
						
					
						<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<?php
							include('hsdangky.php');
							?>
						</div>
					
						<div id="myModal2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<?php
							include('gvdangky.php');
							?>
						</div>
					</div>
				</div>
			</div>

		</div>
	<div class="bot">
	<?php
	    include_once('footer.php');
	    ?>
	</div>
</body>
<script>

</script>
</html>
