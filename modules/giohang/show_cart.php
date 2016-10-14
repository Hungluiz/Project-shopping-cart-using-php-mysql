<?php 	
	if(!isset($_SESSION)){
		session_start();
	}else{
	include('admincp/modules/config.php');
	
	if(isset($_POST['submit']))
	{
		 foreach($_POST['qty'] as $key=>$value)
		 {
			  if( ($value == 0) and (is_numeric($value)))
			  {
			   unset ($_SESSION['cart'][$key]);
			  }
			  elseif(($value > 0) and (is_numeric($value)))
			  {
			   $_SESSION['cart'][$key]=$value;
			  }
	 	 }
	 header("location:show_cart.php");
	}
	// kiểm tra koi có tồn tại sản phẩm(id) nào trong giỏ hàng không
	$ok = 1;
	if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $k => $v)
			{
				if(isset($k)){
					$ok = 2;	
				}	
			}
	}
	if($ok == 2){
		// Cho hiển thị giỏ hàng
	   echo "<form action='show_cart.php' method='post'>";
	   foreach($_SESSION['cart'] as $key=>$value)
	   {
		$item[]=$key;
	   }
	   $str=implode(",",$item);
	 
	   $sql="select * from chitietsp where id_sp in ($str)";
	   $query=mysql_query($sql);
	   echo"<div class='show_cart'>";	
	  echo " <table width='600' border='1' cellspacing='0px' cellpadding='5px'>";
	     echo"<tr>";
			echo"		<th width='80' height='42'><div align='center'><strong>TÊN</strong></div></th>";
				echo"	<th width='70'><div align='cente'><strong>GIÁ</strong></div></th>";
				echo"	<th width='50'><div align='center'><strong>SỐ LƯỢNG</strong></div></th>";
			echo"	<th width='50'><div align='center'><strong>TÁC VỤ</strong></div></th>";
			echo"	<th width='60'><div align='center'><strong>TỔNG</strong></div></th>";
		 echo"</tr>";
	   while($row=mysql_fetch_array($query))
	   {
		   echo "<tr>";	   
			  
			   echo "<td>$row[tensp]</td>";
			   echo "<td>".number_format($row[gia],3)." VND<br /></td>";
			   echo "<td><p><input type='text' name='qty[$row[id_sp]]' size='3' value='{$_SESSION['cart'][$row[id_sp]]}'></td>";
			   echo "<td><a href='delcart.php?id=$row[id_sp]'>Xóa</a></p></td>";
			   echo "<td><p>". number_format($_SESSION['cart'][$row[id_sp]]*$row[gia],3) ." VND</p></td>";
			   $total+=$_SESSION['cart'][$row[id_sp]]*$row[gia];
		   echo "</tr>";
	   }
	   echo"<tr>";
	   		echo"<td colspan='5' style='text-align:center;'";
				echo "<b>Tổng đơn hàng: <font color='red'>". number_format($total,3)." VND</font></b>";
			echo"</td>";
	   echo"</tr>";
	  echo "</table>";
	  
	  echo "<br/> <input type='submit' name='submit' value='Cap Nhat Gio Hang'>";
	  echo "<div class='pro' align='center'>";
	  echo "<b><a href='../../index.php'>Mua Sach Tiep</a> - <a href='../../modules/giohang/delcart.php?id=0'>Xoa Bo Gio Hang</a></b>";
	  echo "</div>";
	  echo"</form>"; 
	 }
	else
	 {
	  echo "<div class='pro'>";
	  echo "<p align='center'>Ban khong co mon hang nao trong gio hang<br /><a href='index.php'>Mua sản phẩm</a></p>";
	  echo "</div>";
	 }		
	
echo"</div>";
	}
?>
