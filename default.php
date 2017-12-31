<?php
	session_start();
	if(isset($_SESSION['user_name']))
	{
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trăc nghiệm online</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/webstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="Portlets/NivoSlider/CSS/nivo-slider.css" rel="stylesheet" />
	<link href="Portlets/NivoSlider/CSS/themes/default.css" rel="stylesheet" />

	<script src="Portlets/NivoSlider/Scripts/jquery.nivo.slider.js"></script>
	
</head>
<body>
	<div class="container">
	<div class="top">
	   <?php
	    include_once('header_TrangChu.php');
	    ?>
	</div>
	
	
	<div>
	<?php
		if($_SESSION['type_account']==1)
		{
			include_once('menu.php');
		}
		else if($_SESSION['type_account']==2)
		{
			include_once('menuGV.php');
		}
	?>
	
	</div>
	<div class="bot">
	<?php
	    include_once('footer.php');
	    ?>
	</div>
</body>

</html>

<?php
	}
	else
		header("Location:index.php");
?>