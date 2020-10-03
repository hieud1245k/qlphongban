<?php
	session_start();
	if(isset($_SESSION['user']))
		header('location:frame2.php');
	//echo $_SESSION['user'];
?>
<html>
	<head>
		<style type="text/css">
			#chenanh {
				background-image: url(http://localhost:81/php/17N11_NguyenMinhHieu17T2/haivan.jpg);
				color: white;
			}
		</style>
		<div id=title>
		<title>Quản lý phòng ban</title>
		<meta charset="utf-8">
		<frameset border=2 rows="68,*,50">
			<frame src="trangchu.php" />
			<frameset cols="18%,*">
				<frame name='tuychon' src='tuychon.php' />
				<frame id=chenanh name='noidung' src=http://wapvip.pro:81/dashboard/ />
			</frameset>
			<frame src=south.php/>
			<noframes> Trình duyệt không hỗ trợ Frame</noframes>
		</frameset>
		</div>
	</head>
</html>
