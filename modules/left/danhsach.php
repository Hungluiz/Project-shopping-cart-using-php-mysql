<?php
	$sql_loaisp = "select * from loaisp";
	$query = mysqli_query($conn,$sql_loaisp);
 ?>
 <?php
	$sql_hieusp = "select * from hieusp";
	$query_hieusp = mysqli_query($conn,$sql_hieusp);
 ?>
  <?php
	$sql_pk = "select * from phukien";
	$query_pk = mysqli_query($conn,$sql_pk);
 ?>

	
    <div class="danhsachsanpham">
    	<h3><i class="fa fa-bars" aria-hidden="true"></i>LOẠI SẢN PHẨM</h3>
        	<ul>
            	<?php 
					while($dong_loaisp = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				?>
                 <li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_loaisp['id_loaisp']?>"><i class="fa fa-caret-right" aria-hidden="true"></i>  <?php echo $dong_loaisp['tenloaisp']?></a></li>
                 <?php 
					}
				 ?>                                                                      
            </ul>  
      			
 	</div><!----------- kết thúc loại sản phẩm ---------> 

   