<?php 
	$qr = "SELECT * FROM hieusp a,chitietsp b WHERE b.id_hieusp = a.id_hieusp AND b.id_hieusp = '$_GET[id]' ";
	$query = mysqli_query($conn,$qr);
?>
	<p id="chitiet">CHI TIẾT HIỆU SẢN PHẨM</p>
  	<div class="sanphamall">
		<ul>     
        <?php 			
			while($dong_hieusp = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		?>  
        	<li class="chitietsp">
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_hieusp['id_sp'] ?>">               
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_hieusp['hinhanh']?>" width="139" height="117"/>   
                 <p style="font: 18px/18px arial,sans-serif;"><?php echo $dong_hieusp['tensp']?></p>             
                <p style="color:#F00"><?php echo $dong_hieusp['gia']?> vnđ</p>
                <p style="color:#999"><i class="fa fa-eye" aria-hidden="true"></i> lượt xem:<?php echo $dong_hieusp['soluotxem']?></p>			                
            	</a>
                 <a href="index.php?xem=muahang&id=<?php echo $dong_hieusp['id_sp'] ?>">
                	<input type="button" name="mua" value="Mua" class="btn_mua">				
                </a>
            </li>
         <?php 
			}
		 ?>                                                           
       </ul>
     </div>
                    
        