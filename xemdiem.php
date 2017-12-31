<?php
include('dbconnect.php');

$aa=$_SESSION['user_name'];
$userid=$_SESSION['user_id'];

$sql="SELECT * FROM user WHERE UserName = '$aa'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);


$conna=mysql_connect($db['server'], $db['username'], $db['password']) or die("can't connect database");
mysql_select_db($db['dbname'], $conna);

  $sqls="SELECT * FROM diemthi where UserID='$userid' and MaDe!=0";
 $queryde = mysql_query($sqls);
 $querys = mysqli_query($conn, $sqls);
 $results = mysqli_fetch_array($querys);
?>

<div width="600px" style="border-style:dashed; border-width:1px">
		<div id="" class="Divpannel" style="width:100%;">
			<p align="center">
				<table cellpadding="0" cellspacing="0" width="100%" >
					<tr>
						<td>

							<p style="text-align:center">
								<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lblTieude" style="font-size:30pt;">Điểm Kiểm Tra</span>
							</p>
					
							&nbsp;<p>
								Họ tên :<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lbInfo" style="font-weight:bold;"><?php echo "$result[UserName]";?></span>
							</p>
							
							<table cellpadding="0" cellspacing="0" width="100%">

								<tr>
									<td align="Center">
										<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lblHocphandangky" class="StudentInfoDetails_dl" style="font-size:14px;">Thống kê điểm kiểm tra</span>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lblYearterm" class="StudentInfoDetails_dl" style="font-size:11px;">HK01/2017-2018</span>
									</td>
								</tr>
								<tr>
									<td align="center" style=" height:1px; width:100%;" valign="top" >
										<div id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_pnlInphieu">

											<div>
												<table cellspacing="0" cellpadding="4" border="1" border="0" id="" style="color:#333333;width:100%;border-collapse:collapse;">
													<tr align="center" style="color:White;background-color:#507CD1;font-weight:bold;">
														<th scope="col">Mã Đề</th><th scope="col">Tên Sinh Viên</th><th scope="col">Điểm lần cuối</th><th scope="col">Số lần kiểm tra</th><th scope="col">Thời gian</th>
													</tr>
													<?php
													while($row=mysql_fetch_array($queryde))
													{
													?>
													<tr style="background-color:#EFF3FB;font-size:10pt;">
														<td align="center">
															<span id=""><?php echo "$row[MaDe]";?></span>
														</td><td align="center"><?php echo "$result[DisplayName]";?></td>
														<td align="center"><?php echo "$row[Diem]"; ?></td>
														<td align="center"><?php echo "$row[solanthi]"; ?></td>
														<td align="center"><?php echo "$row[ThoiGan]"; ?></td>
													</tr>
													<?php } ?>
													
													
												</table>
											</div>
											<p style="text-align:center"></p>

										</div>
									</td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table>
			</p>
		</div>
</div>