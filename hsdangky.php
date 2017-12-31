					<form action="checkhs.php" method="post" name="myForm" onsubmit="return check()"  >
						<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button class="close" type="button" data-dismiss="modal" aria-hidden="true">x</button>
										<h4 id="myModalLabel" class="modal-title">Học sinh đăng ký</h4>
									</div>
									<div class="modal-body form-group">
										<label >Họ và tên học sinh:</label>
										<input id="tenhocsinh" class="form-control" placeholder="Nhập họ và tên" name="tenhocsinh" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Mã số sinh viên</label>
										<input id="mshocsinh" class="form-control" placeholder="Nhập mã số sinh viên" name="mshocsinh" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Tên đăng nhập</label>
										<input id="tendk" class="form-control" placeholder="Nhập tên đăng nhập" name="tendk" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Mật khẩu</label>
										<input id="passhs" class="form-control" placeholder="Nhập mật khẩu" name="passhs" type="password">
									</div>
									<div class="modal-body form-group">
										<label >Nhập lại mật khẩu</label>
										<input id="passhscf" class="form-control" placeholder="Xác minh mật khẩu" name="passhscf" type="password">
									</div>
									<div class="modal-footer">
										<input class="btn btn-default" data-dismiss="modal" value="Hủy" type="button">
										<input id="submit" name="submit" class="btn btn-primary" value="Đăng ký" type="submit" >
									</div>
								</div>
							</div>
					</form>
							
	<script>
	function check(){
		var tenhocsinh=document.forms['myForm']['tenhocsinh'].value;
		var mshocsinh=document.forms['myForm']['mshocsinh'].value;
		var tendk=document.forms['myForm']['tendk'].value;
		var passhs=document.forms['myForm']['passhs'].value;
		var passhscf=document.forms['myForm']['passhscf'].value;
		if(tenhocsinh=='')
		{
			alert('Tên không được để trống');
			return false;
		}
		else if(mshocsinh=='')
		{
			alert('Mã số không được để trống');
			return false;
		}
		else if(tendk=='')
		{
			alert('Tên đăng nhập không được để trống');
			return false;
		}
		else if(passhs=='')
		{
			alert('Mật khẩu không được để trống');
			return false;
		}
		else if(passhs!=passhscf)
		{
			alert('Mật khẩu không trùng nhau yêu cầu nhập lại');
			return false;
		}
		else{
			window.location="http://goldmagic.club/New/checkhs.php";
			
		
		
		}
	}
	
	</script>