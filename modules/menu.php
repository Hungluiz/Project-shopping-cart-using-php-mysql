<?php 
	
	$qr = "
			SELECT * FROM loaisp;
		";	
	$hieusp = mysqli_query($conn,$qr);
?>
<?php 
	
	$qr_hieusp = "
			SELECT * FROM hieusp;
		";	
	$run_hieusp = mysqli_query($conn,$qr_hieusp);
?>
<div class="menu">
	<div class="menu_trai">
            <ul>
                 <li><a href="index.php">TRANG CHỦ</a></li>
                 <li><a href="index.php?xem=chitietloaisanpham&id=1">SẢN PHẨM   <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                 	<ul>
						<?php                            
                            while($row_loaisp = mysqli_fetch_array($hieusp,MYSQLI_ASSOC)){
                         ?>
                    		<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_loaisp['id_loaisp']?>"><?php echo $row_loaisp['tenloaisp']?></a></li>   
                        <?php 
						}
						?>                     
                    </ul>
                 </li>
                 <li><a href="index.php?xem=chitietloaisanpham&id=1">Nhà sản xuất   <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                 	<ul>
						<?php                            
                            while($row_hieusp = mysqli_fetch_array($run_hieusp,MYSQLI_ASSOC)){
                         ?>
                    		<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_hieusp['id_hieusp']?>"><?php echo $row_hieusp['tenhieu']?></a></li>   
                        <?php 
						}
						?>                     
                    </ul>
                 </li>
                 <li><a href="#">LIÊN HỆ</a></li>
                 <li><a href="#">HƯỚNG DẪN</a></li>                  						        		        
            </ul>
    </div> 
    <div class="menu_phai">
    	<p class="lab_login"><i class="fa fa-user" aria-hidden="true"></i>  Đăng nhập</p>
    	
    </div>           
</div>
