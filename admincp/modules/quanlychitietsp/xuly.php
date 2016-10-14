<?php

	include('../config.php');
	$id = $_GET['id'];
	$tensp=$_POST['tensp'];
	$mota=$_POST['motasp'];
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$id_hieusp=$_POST['hieusp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$thutu=$_POST['thutu'];
	
	if(isset($_POST['them'])){
		
		// thêm dữ liệu nhập từ form vào csdl
		$sql="INSERT INTO chitietsp (tensp,thutu,mota,gia,id_hieusp,id_loaisp,hinhanh) VALUES ('$tensp','$thutu','$mota','$gia','$id_hieusp','$loaisp','$hinhanh')";
		mysql_query($sql);
		
		// quay lai trang thêm loại sản phẩm
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		
	}else if(isset($_POST['sua'])){
			// sữa
			if($hinhanh!=''){
			$sql = "UPDATE chitietsp set tensp='$tensp',thutu='$thutu',gia='$gia',hinhanh='$hinhanh',id_hieusp='$id_hieusp',mota='$mota',id_loaisp='$loaisp' WHERE id_sp='$id' ";
			}else{
				$sql = "UPDATE chitietsp set tensp='$tensp',thutu='$thutu',gia='$gia',id_hieusp='$id_hieusp',mota='$mota',id_loaisp='$loaisp' WHERE id_sp='$id' ";
			}
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		}else{
			//xoá
			$sql = "DELETE FROM chitietsp WHERE id_sp='$id' ";
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlychitietsp&ac=them');	
		}
?>