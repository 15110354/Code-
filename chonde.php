<?php
	include('dbconnect.php');
?>

<?php
$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);

  $sqls="SELECT * FROM cauhoi";
 $querys = mysqli_query($conn, $sqls);
 $results = mysqli_fetch_array($querys);
 
 $data=(mysqli_num_rows($querys))/10;
 $dem=1;
?>
<form action="default.php?url=tracnghiem.php" method="post">
<div width="600px" style="border-style:dashed; border-width:1px">
		<div id="" class="Divpannel" style="width:100%;">
			<p align="center">
				Chọn đề thi:</br>
				<?php
				while($data>0)	{
				?>
				<input type="radio" name="de" value="<?php echo "$dem"; ?>" /> <?php echo "Đề $dem";?></br>
				<?php
				$data--;
				$dem++;
				}
				?>
				<input type="submit" id="submit" name="chode" value="Bắt đầu thi" />
			</p>
		</div>
</div>


</form>
