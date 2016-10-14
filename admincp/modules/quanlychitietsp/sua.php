<?php 
	$sql = "SELECT * FROM chitietsp WHERE id_sp='$_GET[id]'";
	$run = mysql_query($sql);
	$dong = mysql_fetch_array($run); // lấy ra 1 sản phẩm để sửa từ csdl
?>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data" >
<table width="115%" height="571" border="1" >
  <tr>
    <th colspan="2">
        <div align="center" style="font-weight:bold; font-size:20px">SỮA CHI TIẾT SẢN PHẨM
        </div>
    </th>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>" ></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td>
        <div align="left">
          <input type="file" name="hinhanh" />
          <img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="146" height="85"/>
        </div>
  	</td>
  </tr>
  <tr>
    <td>Mô tả </td>
    <td><textarea name="motasp" cols="100" rows="20"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
  <?php 
  	$sql_loaisp = "SELECT * FROM loaisp";
	$run_loaisp = mysql_query($sql_loaisp);
  ?>
  <tr>
    <td>Loại </td>
    <td><select name="loaisp">
    <?php 
		while($dong_loaisp = mysql_fetch_array($run_loaisp)){
			if($dong['id_loaisp'] == $dong_loaisp['id_loaisp']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['id_loaisp']?>">
			<?php echo $dong_loaisp['tenloaisp']?>
        </option>
    <?php 
		}else{
	?>
    	<option value="<?php echo $dong_loaisp['id_loaisp']?>">
			<?php echo $dong_loaisp['tenloaisp']?>
        </option>
    <?php 
			
		}
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td>
    	<input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>">
    </td>
  </tr>
  <?php 
  	$sql_hieusp = "SELECT * FROM hieusp";
	$run_hieusp = mysql_query($sql_hieusp);
  ?>
  <tr>
    <td>Hãng sản xuất</td>
    <td><select name="hieusp">
      <?php 
		while($dong_hieusp = mysql_fetch_array($run_hieusp)){
			if($dong['id_hieusp'] == $dong_hieusp['id_hieusp']){
	?>
      <option selected="selected" value="<?php echo $dong_hieusp['id_hieusp']?>"><?php echo $dong_hieusp['tenhieu']?></option>
      <?php 
		}else{
	?>
      <option value="<?php echo $dong_hieusp['id_hieusp']?>"><?php echo $dong_hieusp['tenhieu']?></option>
      <?php 
			
		}
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">        
        <input class="button"  type="submit" name="sua"  value="Cập nhật" />       
        </div>
    </td>
    </tr>
</table>
</form>
