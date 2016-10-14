<?php
	$qr = "SELECT * FROM chitietsp";
	$run = mysqli_query($conn,$qr);
	$row_chitiet = mysqli_fetch_array($run,MYSQLI_ASSOC);
	$id_loaisp = $row_chitiet['id_loaisp'];	
	
	$qr_loaisp = "SELECT * FROM loaisp";
	$run_loaisp = mysqli_query($conn,$qr_loaisp);
	$row_loaisp = mysqli_fetch_array($run_loaisp,MYSQLI_ASSOC);
	
 ?>
<?php 
	$qr = "
			SELECT * FROM chitietsp
			ORDER BY id_sp DESC
			LIMIT 0,6
		";	
	$sanphammoinhat = mysqli_query($conn,$qr);
?>
<div class="sanphammoinhat">
	<p id="chitiet">SẢN PHẨM MỚI NHẤT</p>
  	<div class="sanphamall">
		<ul>       
        	<?php 
				
				while($row_sanphammoi = mysqli_fetch_array($sanphammoinhat,MYSQLI_ASSOC)){
			?>
       		<li class="chitietsp">
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $row_sanphammoi['id_sp'] ?>">
                <p><?php echo $row_sanphammoi['tensp']?></p>
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $row_sanphammoi['hinhanh']?>" width="139" height="117"/>                
                <p style="color:#F00"><?php echo $row_sanphammoi['gia']?> vnđ</p>
                <p style="color:#999"><i class="fa fa-eye" aria-hidden="true"></i> lượt xem:<?php echo $row_sanphammoi['soluotxem']?></p>                
            	</a>
                 <a href="index.php?xem=muahang&id=<?php echo $row_sanphammoi['id_sp'] ?>">
                	<input type="button" name="mua" value="Mua" class="btn_mua">				
                </a>
            </li>                       
        	<?php 
				}
			?>                                                                                               
       </ul>
       
     </div>
</div>
     <!-------------- Hiển thị sản phẩm Máy In ------------>
     <?php 
	 	
	 		$qr = "SELECT * FROM chitietsp 
				WHERE id_loaisp = $id_loaisp
				ORDER BY id_sp DESC
				LIMIT 0,6
			";
			$laysanphamlaptop = mysqli_query($conn,$qr);	
		
	 ?>
     <div class="hienthisp_laptop">   
     		<a href="#"><img src="modules/quangcao/qc1.jpg" width="955" height="80"/></a>    		
       		<p id="chitiet" style="margin-top:10px;">TIVI</p>
            <div class="sanphamall">
           	  <ul>       
        	<?php 				
				while($row_splaptop = mysqli_fetch_array($laysanphamlaptop,MYSQLI_ASSOC)){
			?>
       		<li class="chitietsp">
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $row_splaptop['id_sp'] ?>">
                <p><?php echo $row_splaptop['tensp']?></p>
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $row_splaptop['hinhanh']?>" width="139" height="117"/>                
                <p style="color:#F00"><?php echo $row_splaptop['gia']?> vnđ</p>
                <p style="color:#999">Lượt xem:<?php echo $row_splaptop['soluotxem']?></p>                
            	</a>
                 <a href="modules/giohang/add-cart.php?id=<?php echo $row_splaptop['id_sp']?>">
                	<input type="button" name="mua" value="Mua" class="btn_mua">				
                </a>
            </li>                       
        	<p>
        	  <?php 
				}
			?>                                                                                 
              </ul>
                <a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_loaisp['id_loaisp'] ?>">
       	      <input type="button" name="hientatcasp" value="Hiện Tất Cả Sản Phẩm" class="btn_hientatcasp">
      	    </a>
   </div> 
   <!-------------- Hiển thị sản phẩm Máy In ------------>          
     
</div>
                    
        