<?php
	session_start();
?>
<html>
	<head>
		<style type="text/css">
			body {
				background-color:DarkSlateBlue;
			}
			.title {
				color:white;
			}
		</style>
	</head>
	<body>
		<div class='title'>
		<a href=frame2.php target=_parent><font class=title size=4><b>CHƯƠNG TRÌNH QUẢN LÝ PHÒNG BAN</b></font></a>
		</div>
		<div class=title align=right>
			Xin chào <?php echo $_SESSION['user']; ?> 
			<a href=logout.php target=_parent><button type=button name=logout>Logout</button></a>
		</div>
	</body>
</html>