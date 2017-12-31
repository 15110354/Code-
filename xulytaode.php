<?php
	include('dbconnect.php');
?>

<?php
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);

  $sqls="SELECT * FROM cauhoi";
 $querys = mysqli_query($conn, $sqls);
 $results = mysqli_fetch_array($querys);
 
 $IDcauhoi=(mysqli_num_rows($querys))+1;
 $Madecauhoi=(mysqli_num_rows($querys))/10+1;


	
	if(isset($_POST['taode']))
	{
		$dem=0;
		while($dem<10)
		{
			$sqlsec="INSERT INTO `cauhoi`(`ID`, `MaDe`,`noidung`, `a`, `b`, `c`, `d`, `dad`) VALUES ('$IDcauhoi','$Madecauhoi','0','0','0','0','0','0')";
			mysqli_query($conn,$sqlsec);
			$dem++;
			$IDcauhoi++;
			
			
		}
	}
	session_start();
	$_SESSION['taomade'] = $Madecauhoi;
?>


<form action="default.php?url=xulyluude.php" method="post">
<?php
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);




	$sqla="SELECT * FROM cauhoi where MaDe='$Madecauhoi' ";
  $querya=mysql_query($sqla);
  
  $queryy = mysqli_query($conn, $sqla);
 $resulty = mysqli_fetch_array($queryy);
  $dem=1;
  

while($row=mysql_fetch_array($querya))
{
	
	?>
	<ul>
	<li>Câu hỏi <?php echo "$row[ID]"; ?> <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="50" /></li>
	<li>Đáp án a) <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án b) <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án c) <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án d) <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án dúng: <input type="text" value="" name="<?php echo "$dem"; $dem++; ?>" size="5" /></li>
	</ul>
	<?php
	
}
?>	<input type="submit" name="ookcauhoi" value="Gui" />

</form>