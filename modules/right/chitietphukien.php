<?php 
	$sql_chitiet = "select * from chitietsp where id_loaisp = '$_GET[id]'";
	$query = mysql_query($sql_chitiet);
	
?>
	<p class="chitiet" >Chi tiết loại sản phẩm</p>
  	<div class="sanphamall">
		<ul>     
        <?php 
			while($dong_chitiet = mysql_fetch_array($query)){
		?>  
       		<li>
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp'] ?>">
                <p style="font: 18px/18px arial,sans-serif;"><?php echo $dong_chitiet['tensp']?></p>
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="100" height="100"/>
                
                <p style="color:#F00"><?php echo $dong_chitiet['gia']?></p>
                <p style="color:#999"><i class="fa fa-eye" aria-hidden="true"></i> lượt xem:<?php echo $dong_chitiet['soluotxem']?></p>
                <p style="text-align:center">Chi tiết</p>
            	</a>
            </li>
         <?php 
			}
		 ?>                                                           
       </ul>
     </div>
                    
        