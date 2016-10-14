<?php

	include('../config.php');
	$id = $_GET['id'];
	$tenphukien=$_POST['tenphukien'];
	$thutu=$_POST['thutu'];
	
	if(isset($_POST['them'])){
		
		// thực thi thêm dữ liệu nhập từ form vào csdl
		$sql="INSERT INTO phukien (tenphukien,thutu) VALUES ('$tenphukien','$thutu')";
		mysql_query($sql);
		
		// quay lai trang thêm loại sản phẩm
		header('location:../../index.php?quanly=quanlyphukien&ac=them');
		
	}else if(isset($_POST['sua'])){
			// sữa
			$sql = "UPDATE phukien set tenphukien='$tenphukien',thutu='$thutu' WHERE id_phukien='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyphukien&ac=them');
		}else{
			//xoá
			$sql = "DELETE FROM phukien WHERE id_phukien='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyphukien&ac=them');	
		}
?>