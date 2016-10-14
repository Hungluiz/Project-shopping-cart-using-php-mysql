<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webbanhang';
	//kết nối 
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die("Không thể kết nối với CSDL");
?>