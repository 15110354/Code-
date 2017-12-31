<?php
/*
$id=$_SESSION['user_id'];

include('dbconnect.php');
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);

$sqld="SELECT * FROM user Where UserID='$id'";
 $queryd = mysqli_query($conn, $sqld);
$resultd = mysqli_fetch_array($queryd);

 
  $sqla="SELECT * FROM answers WHERE QuesID=$resultd[cauhoi]";
  $querya=mysql_query($sqla);
  
 $sqlq="SELECT * FROM questions Where QuesID=$resultd[cauhoi]";
 $queryq = mysqli_query($conn, $sqlq);
$resultq = mysqli_fetch_array($queryq);



  
?>

<form action="default.php?url=tracnghiem.php" method="post">
		<p>
		<?php echo "Câu $resultd[cauhoi] : $resultq[Contents]";
		echo "</br>";
		echo "Đáp án";
		echo "</br>";
		$dem=1;
		while($row=mysql_fetch_array($querya))
		{
			 ?>
			<input type="radio" name="gender" value="answer" id="answer"><?php echo "$dem. $row[Answer]"; ?></br>
			<?php
			$dem++;
		}
		$dem=1;
		?>
		</p>
		<input type="submit" id="submit" name="quaylai" value="Quay Lại">
		<input type="submit" id="submit" name="traloi" value="Trả lời">
</form>
<?php
session_start();
	if(isset($_POST['traloi']))
	{

$sqlupdate = "UPDATE user SET cauhoi=$resultd[cauhoi] +1 WHERE UserID='$id'";
mysqli_query($conn,$sqlupdate);
	}
	else if(isset($_POST['quaylai']))
	{
		$sqlupdate = "UPDATE user SET cauhoi=$resultd[cauhoi]-2 WHERE UserID='$id'";
mysqli_query($conn,$sqlupdate);
	}
*/
?>

<?php
include('dbconnect.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datehochiminh = date('d/m/Y H:i:s');

?>




<form action="default.php?url=xulydapan.php" method="post" name="formcauhoi" id="formcauhoi">
<?php
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);

if(isset($_POST['chode']))
{
	session_start();
	$made=$_POST['de'];
	$_SESSION['made']=$made;
}
$userid=$_SESSION['user_id'];
$DisplayName=$_SESSION['DisplayName'];
	$sqla="SELECT * FROM cauhoi where MaDe='$made' ";
  $querya=mysql_query($sqla);
  
  $sqls="SELECT * FROM diemthi where UserID='$userid' and MaDe='$made'";
 $querys = mysqli_query($conn, $sqls);
 $results = mysqli_fetch_array($querys);
  
  if(mysqli_num_rows($querys)<1)
  {
	$sqlsec="INSERT INTO `diemthi`(`UserID`,`MaDe`, `Diem`, `ThoiGan`,`DisplayName`,`solanthi`) VALUES ('$userid','$made','0','$datehochiminh','$DisplayName','0')";
	mysqli_query($conn,$sqlsec);

  }
  

while($row=mysql_fetch_array($querya))
{
	echo "<b>$row[ID] .</b> <i>$row[noidung] .</i>"; echo "</br>";
	?>
	<input type="radio" name="<?php echo $row[ID] ?>" value="a" /><?php echo $row[a] . '</br>' ?>
	<input type="radio" name="<?php echo $row[ID] ?>" value="b" /><?php echo $row[b] . '</br>' ?>
	<input type="radio" name="<?php echo $row[ID] ?>" value="c" /><?php echo $row[c] . '</br>' ?>
	<input type="radio" name="<?php echo $row[ID] ?>" value="d" /><?php echo $row[d] . '</br>' ?>
	
	<?php
	
}
?>
	<input type="submit" name="ook" value="Gui" />
</form>