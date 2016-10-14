
<?php 
	$qr = "
			SELECT * FROM chitietsp
			ORDER BY soluotxem DESC
			LIMIT 0,3
		";	
		$spxemnhieu = mysqli_query($conn,$qr);
	
?>

<div class="sanphamxemnhieu">  
   
	<div class="spxemnhieu">
    	<p>SẢN PHẨM XEM NHIỀU</p>
        	<ul>
            	<?php 
					
					while($row = mysqli_fetch_array($spxemnhieu,MYSQLI_ASSOC)){
				?>
                 	<li>
                    	
                   	  <table width="250" height="178" border="0">
                    	  <tr>
                    	    <td height="123" colspan="2" style="text-align:center;"><a href="index.php?xem=chitietsanpham&id=<?php echo $row['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $row['hinhanh'] ?>" width="159" height="106"/>
                           </td>
                        </tr>
                           <tr>
                           	<td width="200" style="text-align:center;">
                           		<?php echo $row['tensp'] ?>
                             </td>
                        	</tr>
                            <tr>
                             <td style="text-align:center;color:red;">   
								<?php echo $row['gia'] ?>đ                    	    </td>
                        
                        <tr>
                          <td style="text-align:center;color:#CCC;">
                       	  <i class="fa fa-eye" aria-hidden="true" style="color:#CCC;"></i> lượt xem:<?php echo $row['soluotxem'] ?>                            <a href="index.php?xem=muahang&id=<?php echo $row['id_sp'] ?>">
                          
                       	  <input type="button" name="mua" value="Mua" class="btn btn-primary"></a></td>
                        </tr>
                  	  </table>
                      
                    </li>
                 <?php 
					}
				 ?>                                                        
            </ul> <br>
            
     </div>
      			
</div>
    

                    
             
        