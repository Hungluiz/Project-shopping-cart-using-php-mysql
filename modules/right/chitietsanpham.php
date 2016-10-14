
<?php 
	$qr = "SELECT * FROM chitietsp WHERE id_sp = '$_GET[id]'";
	$run = mysqli_query($conn,$qr);
	$row_chitiet = mysqli_fetch_array($run,MYSQLI_ASSOC);
	$id_loaisp = $row_chitiet['id_loaisp'];		
	if(isset($_GET["id_sp"])){
		$id_sp = $_GET["id_sp"];	
		settype($id_sp,"int");		
	}else{
		$id_sp = 1;			
	}			        
		
		// neu chua ton tai session bo dem moi them 1 lan xem nua
		$sql = "UPDATE  chitietsp  SET soluotxem = soluotxem+1 WHERE id_sp = '$_GET[id]'";
        mysqli_query($conn,$sql);
	
?>
<script>
	function onlike(){
		<?php 
			$sql = "UPDATE  chitietsp  SET LuotThich = LuotThich+1 WHERE id_sp = '$_GET[id]'";
			mysqli_query($conn,$sql);	
		?>
	}
</script>
<div class="chitiet">
<p id="chitiet">CHI TIẾT SẢN PHẨM</p>
  	<div class="sanphamall">
		<ul>       
        <?php 			
			$sql = "SELECT * FROM chitietsp WHERE id_sp = '$_GET[id]'";
			$query = mysqli_query($conn,$sql);
			while($dong_chitiet = mysqli_fetch_array($query,MYSQLI_ASSOC)){				
		?>      
        	<li>           
            <form action="" enctype="multipart/form-data" method="post">
              <table width="609" height="316" border="0" cellspacing="0">
                <tr>
                  <td width="247" rowspan="4"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="246" height="214"/><br>
                  <p style="color:#999">&nbsp;</p>                  
                  <p style="color:#999"><i class="fa fa-eye" aria-hidden="true"></i> lượt xem:<?php echo $dong_chitiet['soluotxem']?></p>
                  <span class="like" onclick="onlike()" style="cursor:pointer"><i class="fa fa-heart-o" aria-hidden="true"></i></span>: <?php echo $dong_chitiet['LuotThich']?>
                  </td>
                  <th width="389"><?php echo $dong_chitiet['tensp']?></th>
                </tr>
                <tr>
                  <td style="color:#F00;font-size: 20px"><?php echo $dong_chitiet['gia']?> vnđ</td>
                </tr>
                <tr>
                  <td height="125" ></td>
                </tr>
                <tr>
                  <td><a href="index.php?xem=muahang&id=<?php echo $dong_chitiet['id_sp'] ?>"><button type="button" class="btn btn-primary" name="muahang">Mua Hàng</button></a></td>
                </tr>
              </table>
       		  
              </form>
       		  <a href="index.php?xem=chitietsanpham&id=1"> </a>
              	   
            </li> 
            <?php
			
			}
			 ?>              
      </ul>     
       </div>
     </div>       
      <div class="sanphamcungloai">
      <?php 
			$qr = "
				SELECT * FROM chitietsp 
				WHERE id_sp <> $id_sp
				AND id_loaisp = $id_loaisp
				ORDER BY RAND()
				LIMIT 0,3
			";  
			$query = mysqli_query($conn,$qr);
		?>        		
        <div class="sanphamall">
        <h3 id="chitiet">SẢN PHẨM CÙNG LOẠI</h3>
             <ul>     
            <?php 	
								
                while($row_cungloai = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>          
                <li class="chitietsp">
                    <a href="index.php?xem=chitietsanpham&id=<?php echo $row_cungloai['id_sp'] ?>">             
                     <h3 style="color:#000; font-weight:bold"><?php echo $row_cungloai['tensp']?></h3>        
                    <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $row_cungloai['hinhanh']?>" width="131" height="107"/>
                    <p style="color:#F00; font-size: 20px"><?php echo $row_cungloai['gia']?> vnđ</p>                                    
                    <p style="color:#999">Lượt xem:<?php echo $row_cungloai['soluotxem']?></p>            
                    </a>    
                </li>
                
             <?php 
                }
             ?>                                                           
           </ul>
       </div>
         
        </div>
      
     
     