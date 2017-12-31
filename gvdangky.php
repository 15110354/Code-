	<form action="checkgv.php" method="post" name="myForm" onsubmit="return check()"  >
<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button class="close" type="button" data-dismiss="modal" aria-hidden="true">x</button>
										<h4 id="myModalLabel" class="modal-title">Giáo viên đăng ký</h4>
									</div>
									<div class="modal-body form-group">
										<label >Họ và tên giáo viên:</label>
										<input id="tengiaovien" class="form-control" placeholder="Nhập họ và tên" name="tengiaovien" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Mã số giáo viên</label>
										<input id="msgv" class="form-control" placeholder="Nhập mã số giáo viên" name="msgv" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Tên đăng nhập</label>
										<input id="tendangky" class="form-control" placeholder="Nhập tên đăng nhập" name="tendangky" type="text">
									</div>
									<div class="modal-body form-group">
										<label >Mật khẩu</label>
										<input id="passgv" class="form-control" placeholder="Nhập mật khẩu" name="passgv" type="password">
									</div>
									<div class="modal-body form-group">
										<label >Nhập lại mật khẩu</label>
										<input id="passgvcf" class="form-control" placeholder="Xác minh mật khẩu" name="passgvcf" type="password">
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
		var tengiaovien=document.forms['myForm']['tengiaovien'].value;
		var msgv=document.forms['myForm']['msgv'].value;
		var tendangky=document.forms['myForm']['tendangky'].value;
		var passgv=document.forms['myForm']['passgv'].value;
		var passgvcf=document.forms['myForm']['passgvcf'].value;
		if(tengiaovien=='')
		{
			alert('Tên không được để trống');
			return false;
		}
		else if(msgv=='')
		{
			alert('Mã số không được để trống');
			return false;
		}
		else if(tendangky=='')
		{
			alert('Tên đăng nhập không được để trống');
			return false;
		}
		else if(passgv=='')
		{
			alert('Mật khẩu không được để trống');
			return false;
		}
		else if(passgv!=passgvcf)
		{
			alert('Mật khẩu không trùng nhau yêu cầu nhập lại');
			return false;
		}
		else{
			window.location="http://goldmagic.club/New/checkgv.php";
			
		
		
		}
	}
	
	</script>
							
							