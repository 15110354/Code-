
<?php
include('dbconnect.php');
$aa=$_SESSION['user_name'];
$sql="SELECT * FROM user WHERE UserName = '$aa'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
?>

<div width="600px" style="border-style:dashed; border-width:1px">
		<div id="" class="Divpannel" style="width:100%;">

			<p align="center">
				<table cellpadding="0" cellspacing="0" width="100%" >
					<tr>
						<td>

							<p style="text-align:center">
								<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lblTieude" style="font-size:30pt;">LỊCH THI</span>
							</p>
					
							&nbsp;<p>
								Họ tên :<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lbInfo" style="font-weight:bold;"><?php echo "$result[UserName]";?></span>
							</p>
							
							<table cellpadding="0" cellspacing="0" width="100%">

								<tr>
									<td align="Center">
										<span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ctl00_lblHocphandangky" class="StudentInfoDetails_dl" style="font-size:14px;">Danh sách các môn sắp thi</span>&nbsp;&nbsp;&nbsp;&nbsp;
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
														<th scope="col">Mã Sinh Viên</th><th scope="col">Mã Lớp</th><th scope="col">Tên Lớp</th><th scope="col">Ngày thi</th><th scope="col">Giờ thi</th>
													</tr><tr style="background-color:#EFF3FB;font-size:10pt;">
														<td align="center">
															<span id="">151103</span>
														</td><td align="center">TA001</td>
														<td align="center">Tiếng anh 1</td>
														<td align="center">01/01/2018</td>
														<td align="center">12g59</td>
														</tr><tr style="background-color:#EFF3FB;font-size:10pt;">
														<td align="center">
															<span id="">151103</span>
														</td><td align="center">TA002</td>
														<td align="center">Tiếng anh 2</td>
														<td align="center">03/01/2018</td>
														<td align="center">12g59</td>
														</tr>
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