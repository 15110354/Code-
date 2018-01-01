<?php
include('dbconnect.php');
session_start();

	
	$IDcauhoi=$_SESSION['selectdethi'];
	$IDcauhoi=$IDcauhoi*10-9;
	$IDdapa=$IDcauhoi;
	$IDdapb=$IDcauhoi;
	$IDdapc=$IDcauhoi;
	$IDdapd=$IDcauhoi;
	$IDdung=$IDcauhoi;
	
	$debai=$_SESSION['selectdethi'];
if($_POST['okEdit'])
{
	$dem=1;
	$arr=$_POST;
	foreach($arr as $key => $value)
	{
		if($dem==1 || $dem==7 ||$dem==13  || $dem==19 || $dem==25  || $dem==31 || $dem==37  || $dem==43 || $dem==49  || $dem==55)
		{
			$sqlsec="UPDATE `cauhoi` SET `noidung`='{$value}' WHERE ID='$IDcauhoi'";
			mysqli_query($conn,$sqlsec);
			$IDcauhoi++;
		}
		if($dem==2 || $dem==8 ||$dem==14  || $dem==20 || $dem==26  || $dem==32 || $dem==38  || $dem==44 || $dem==50  || $dem==56)
		{
			$sqlsec="UPDATE `cauhoi` SET `a`='{$value}' WHERE ID='$IDdapa'";
			mysqli_query($conn,$sqlsec);
			$IDdapa++;
		}
		if($dem==3 || $dem==9 ||$dem==15  || $dem==21 || $dem==27  || $dem==33 || $dem==39  || $dem==45 || $dem==51  || $dem==57)
		{
			$sqlsec="UPDATE `cauhoi` SET `b`='{$value}' WHERE ID='$IDdapb'";
			mysqli_query($conn,$sqlsec);
			$IDdapb++;
		}
		if($dem==4 || $dem==10 ||$dem==16  || $dem==22 || $dem==28  || $dem==34 || $dem==40  || $dem==46 || $dem==52  || $dem==58)
		{
			$sqlsec="UPDATE `cauhoi` SET `c`='{$value}' WHERE ID='$IDdapc'";
			mysqli_query($conn,$sqlsec);
			$IDdapc++;
		}
		if($dem==5 || $dem==11 ||$dem==17  || $dem==23 || $dem==29  || $dem==35 || $dem==41  || $dem==47 || $dem==53  || $dem==59)
		{
			$sqlsec="UPDATE `cauhoi` SET `d`='{$value}' WHERE ID='$IDdapd'";
			mysqli_query($conn,$sqlsec);
			$IDdapd++;
		}
		if($dem==6 || $dem==12 ||$dem==18  || $dem==24 || $dem==30  || $dem==36 || $dem==42  || $dem==48 || $dem==54  || $dem==60)
		{
			$sqlsec="UPDATE `cauhoi` SET `dad`='{$value}' WHERE ID='$IDdung'";
			mysqli_query($conn,$sqlsec);
			$IDdung++;
		}
		
		$dem++;
		
		
	}
	echo "Cập nhập thành công: $debai";
}
	
	
	


?>