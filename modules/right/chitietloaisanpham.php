<?php 
	$sql_chitiet = "select * from chitietsp where id_loaisp = '$_GET[id]'";
	$query = mysqli_query($conn,$sql_chitiet);	
	
?>
	<p id="chitiet">CHI TIẾT LOẠI SẢN PHẨM</p>
  	<div class="sanphamall">
		<ul>     
        <?php 			
			while($dong_chitiet = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		?>          
       		<li class="chitietsp">
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp'] ?>">
                
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="184" height="117"/>   
                <p style="font: 18px/18px arial,sans-serif;"><?php echo $dong_chitiet['tensp']?></p>             
                <p style="color:#F00;font-size: 13px"><?php echo $dong_chitiet['gia']?> vnđ</p>               
           	    <p style="color:#999"><i class="fa fa-eye" aria-hidden="true"></i> lượt xem:<?php echo $dong_chitiet['soluotxem']?></p>
                </a>
                <a href="index.php?xem=muahang&id=<?php echo $dong_chitiet['id_sp'] ?>">
                	<input type="button" name="mua" value="Mua" class="btn_mua">				
                </a>              
          </li>
            
         <?php 
			}
		 ?>                                                           
       </ul>
     </div>
                    
        