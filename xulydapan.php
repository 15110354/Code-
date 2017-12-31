<?php
include('dbconnect.php');
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datehochiminh = date('d/m/Y H:i:s');

	$dung=0;
	$sai=0;
	$arr=$_POST;
	foreach($arr as $key => $value)
	{
		if(is_numeric($key))
		{
			$sql2="SELECT * FROM cauhoi where ID={$key}";
			$query = mysqli_query($conn, $sql2);
			$result = mysqli_fetch_array($query);
			if($value == $result[dad])
			{
				echo "Câu {$key} đúng </br>";
				$dung++;
			}
			else
			{
				echo "câu {$key} sai </br>";
				$sai++;
			}
		}
	}
	echo "<b>Số đáp án đúng: $dung</b>";
	echo "</br>";
	echo "<code>Số đáp án sai: $sai</code>";
	echo "</br>";
	
	$made=$_SESSION['made'];
	$userid=$_SESSION['user_id'];
	
	$sqlsc="SELECT * FROM diemthi where MaDe='$made' and UserID='$userid'";
	$querysc = mysqli_query($conn, $sqlsc);
	$resultsc = mysqli_fetch_array($querysc);
	
	if($resultsc[solanthi]<3)
	{
		$sqlsec="UPDATE `diemthi` SET `Diem`='$dung',`ThoiGan`='$datehochiminh',`solanthi`=solanthi+1 WHERE `UserID`='$userid' and `MaDe`='$made'";
		mysqli_query($conn,$sqlsec);
		echo "Hoàn Thành bài kiểm tra. Số điểm đạt được: $dung </br>";
		echo "Thời gian: $resultsc[ThoiGan]";
	}
	else {
		echo "Hoàn Thành bài kiểm tra. Số điểm đạt được: $dung </br>";
		echo "Thời gian: $resultsc[ThoiGan] </br>";
		echo "<code>Số điểm của bạn sẽ không được lưu trữ vì bạn đã vượt quá số lần kiểm tra</code>";
	}
	
	


?>