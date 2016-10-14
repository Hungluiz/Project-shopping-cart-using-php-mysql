<?php 

	function HienThiSP_Theo_Hieu(){
		$qr = "
			SELECT hieusp a, chitietsp b 
			WHERE a.id_hieusp = b.id_hieusp 
			ORDER BY b.id_sp DESC
		";	
		return mysqli_query($conn,$qr);
	}
	
	function HienThiSanPhamMoiNhat(){
		$qr = "
			SELECT * FROM chitietsp
			ORDER BY id_sp DESC
			LIMIT 0,6
		";	
		return mysqli_query($conn,$qr);
	}
	
	
	
	function DanhSachTheLoai(){
		$qr = "
			SELECT * FROM loaisp;
		";	
		return mysqli_query($conn,$qr);
	}
	// hiện sản phẩm cùng loại
	function LaySanPhamCungLoai($id_sp,$id_loaisp){
		$qr = "
			SELECT * FROM chitietsp 
			WHERE id_sp <> $id_sp
			AND id_loaisp = $id_loaisp
			ORDER BY RAND()
			LIMIT 0,3
		";
		return mysqli_query($conn,$qr);
	}
	
	// TIỀM KIẾM SẢN PHẨM
	function TiemKiem($tukhoa){
		 $qr = "
			SELECT * FROM chitietsp
			WHERE tensp REGEXP '$tukhoa'
			ORDER BY id_sp DESC
		";
	    return mysqli_query($conn,$qr);
	}
	
?>
