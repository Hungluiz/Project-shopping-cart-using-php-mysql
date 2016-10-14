
	<p id="chitiet">KẾT QUẢ TIỀM KIẾM</p>
  	<div class="sanphamall">
		<ul>     
        <?php 	
				
			$tukhoa = $_GET["q"];
			$tin =  TiemKiem($tukhoa);	
			while($dong_chitiet = mysql_fetch_array($tin)){
		?>          
       		<li class="chitietsp">
            	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp'] ?>">
                
                <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="184" height="117"/>   
                <p style="font: 18px/18px arial,sans-serif;"><?php echo $dong_chitiet['tensp']?></p>             
                <p style="color:#F00;font-size: 13px"><?php echo $dong_chitiet['gia']?> vnđ</p>               
           	    <p style="color:#999">Lượt xem:<?php echo $dong_chitiet['soluotxem']?></p>
                </a>
                <a href="giohang.php">
                	<input type="button" name="mua" value="Mua" class="btn_mua">				
                </a>              
          </li>
            
         <?php 
			}
		 ?>                                                           
       </ul>
     </div>
                    
        