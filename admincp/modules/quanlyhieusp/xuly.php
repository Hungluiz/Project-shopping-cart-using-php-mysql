<?php

	include('../config.php');
	$id = $_GET['id'];
	$tenhieu=$_POST['tenhieu'];
	$thutu=$_POST['thutu'];
	
	if(isset($_POST['them'])){
		
		// thực thi thêm dữ liệu nhập từ form vào csdl
		$sql="INSERT INTO hieusp (tenhieu,thutu) VALUES ('$tenhieu','$thutu')";
		mysql_query($sql);
		
		// quay lai trang thêm loại sản phẩm
		header('location:../../index.php?quanly=quanlyhieusp&ac=them');
		
	}else if(isset($_POST['sua'])){
			// sữa
			$sql = "UPDATE hieusp set tenhieu='$tenhieu',thutu='$thutu' WHERE id_hieusp='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyhieusp&ac=sua&id='.$id);
		}else{
			//xoá
			$sql = "DELETE FROM hieusp WHERE id_hieusp='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyhieusp&ac=them');	
		}
?>