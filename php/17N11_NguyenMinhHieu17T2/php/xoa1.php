<?php
	if(isset($_GET['cat'])) {
		$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
		mysqli_select_db($link,"dulieu");
		foreach($_GET['cat'] as $value) {
			$sql = "DELETE FROM `nhanvien` WHERE IDNV='$value'";
			$resuft = mysqli_query($link,$sql);
		}
		mysqli_close($link);
	}
	header("location:xoanv1.php");
?>