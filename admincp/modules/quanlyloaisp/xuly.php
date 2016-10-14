<?php

	include('../config.php');
	$id = $_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
	
	if(isset($_POST['them'])){
		
		// thực thi thêm dữ liệu nhập từ form vào csdl
		$sql="INSERT INTO loaisp (tenloaisp,thutu) VALUES ('$tenloaisp','$thutu')";
		mysql_query($sql);
		
		// quay lai trang thêm loại sản phẩm
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
		
	}else if(isset($_POST['sua'])){
			// sữa
			$sql = "UPDATE loaisp set tenloaisp='$tenloaisp',thutu='$thutu' WHERE id_loaisp='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
		}else{
			//xoá
			$sql = "DELETE FROM loaisp WHERE id_loaisp='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlyloaisp&ac=them');	
		}
?>