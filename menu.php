<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="?url=trangchulogin.php">Trang Chủ</a></li>
            <li><a href="?url=lichthi.php">Xem Lịch Thi</a></li>
            <li><a href="?url=chonde.php">Làm Bài Thi</a></li>
            <li><a href="?url=xemdiem.php">Xem Điểm</a></li>
            <li><a href="#">Thông Tin Cá Nhân</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  
	  <form action="logout.php" method="post" name="logout_form" >
       <button type="submit" id="submit" name="submit" class="btn-lgout btn-info">
	<span class="glyphicon glyphicon-off"></span> Đăng xuất
</button>
</form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
		include($_GET['url']);
?>
