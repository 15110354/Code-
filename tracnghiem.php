

<div class="container-fluid">
<div class="row-fluid">
	<div class="row">
	
		<div class="col-sm-5">
		
			<?php
	
			include('cauhoi.php');
			?>
			
		</div>
	
		
		<div class="col-sm-5"  >
			<p>Thời gian còn lại: </p> 
			<div>
				<span id="m">Phút</span> :
				<span id="s">Giây</span>
			</div>
			
		</div>

	
	</div>

</div>
</div>

<script>
var s=59;
var m=14;
function start()
{
	if (s == -1){
        m -= 1;
        s = 59;
    }
	 if (m == -1){
        clearTimeout(timeout);
        alert('Hết giờ');
		document.getElementById("formcauhoi").submit();
        
    }
	document.getElementById('m').innerText = m.toString();
    document.getElementById('s').innerText = s.toString();
	 timeout = setTimeout(function(){
        s--;
        start();
    }, 1000);
}
start();

	


</script>
<?php 
/*
var so=59;
	function demNguoc(){
	so--;
	if(so!=0){
	document.getElementById("dongho").innerHTML=so;
	setTimeout("demNguoc()",1000);
	}else{
	window.location.href="http://goldmagic.club/New/default.php";
	}
}
demNguoc();
*/
?>
