<?php
	include('dbconnect.php');
	
	if(isset($_POST['chondeEdit']))
{
	session_start();
	$made=$_POST['selectdethi'];
	$_SESSION['selectdethi']=$made;
}
?>




<form action="default.php?url=xulyluuEdit.php" method="post">
<?php
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);




	$sqla="SELECT * FROM cauhoi where MaDe='$made' ";
  $querya=mysql_query($sqla);
  
  $queryy = mysqli_query($conn, $sqla);
 $resulty = mysqli_fetch_array($queryy);
  $dem=1;
  

while($row=mysql_fetch_array($querya))
{
	
	?>
	<ul>
	<li>Câu hỏi <?php echo "$row[ID]"; ?> <input type="text" value="<?php echo "$row[noidung]";?>" name="<?php echo "$dem"; $dem++; ?>" size="50" /></li>
	<li>Đáp án a) <input type="text" value="<?php echo "$row[a]";?>" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án b) <input type="text" value="<?php echo "$row[b]";?>" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án c) <input type="text" value="<?php echo "$row[c]";?>" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án d) <input type="text" value="<?php echo "$row[d]";?>" name="<?php echo "$dem"; $dem++; ?>" size="10" /></li>
	<li>Đáp án dúng: <input type="text" value="<?php echo "$row[dad]";?>" name="<?php echo "$dem"; $dem++; ?>" size="5" /></li>
	</ul>
	<?php
	
}
?>	<input type="submit" name="okEdit" value="Cập nhập" />

</form>