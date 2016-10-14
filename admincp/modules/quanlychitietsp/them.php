<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<style type="text/css">
.Tohama {
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
}
</style>
<div class="themchitietsp">
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data" style="margin-bottom:10px; margin-top:10px;">
  <div align="center">
    <table width="800" border="1" align="center" style="border-color:#000;">
      <tr class="Tohama">
        <th height="45" colspan="2">
        	<div align="center" >THÊM CHI TIẾT SẢN PHẨM</div>
        </th>
      </tr>
      <tr>
        <td width="274" class="Tohama"><strong>Tên sản phẩm</strong></td>
        <td width="510"><input type="text" name="tensp"></td>
      </tr>
      <tr>
        <td class="Tohama"><strong>Giá sản phẩm</strong></td>
        <td><input type="text" name="gia"></td>
      </tr>
      <tr>
        <td class="Tohama"><strong>Hình ảnh</strong></td>
        <td><input type="file" name="hinhanh"></td>
      </tr>
      <tr>
        <td class="Tohama"><strong>Mô tả </strong></td>
        <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
      </tr>
      <?php 
  	$sql = "SELECT * FROM loaisp";
	$run = mysql_query($sql);
  ?>
      <tr>
        <td class="Tohama"><strong>Loại </strong></td>
        <td><select name="loaisp">
          <?php 
			while($dong = mysql_fetch_array($run)){
		 ?>
          <option value="<?php echo $dong['id_loaisp']?>"><?php echo $dong['tenloaisp']?></option>
          <?php 
			}
		 ?>
        </select></td>
      </tr>
      <tr>
        <td class="Tohama"><strong>Thứ tự</strong></td>
        <td><input type="text" name="thutu"></td>
      </tr>
       <?php 
		$sql_hieu = "SELECT * FROM hieusp";
		$run_hieu = mysql_query($sql_hieu);
	  ?>
      <tr>
        <td class="Tohama">Hãng sản xuất</td>
        <td><select name="hieusp">
          <?php 
		while($dong_hieu = mysql_fetch_array($run_hieu)){
	?>
          <option value="<?php echo $dong_hieu['id_hieusp']?>"><?php echo $dong_hieu['tenhieu']?></option>
          <?php 
		}
	?>
        </select></td>
      </tr>
      <tr>
        <td colspan="2" style="vertical-align:top bottom; height:40px">
          <div align="center">           
            <button class="btn btn-warning"  name="them"  > <i class="fa fa-plus-square" aria-hidden="true"></i></button>       
          </div>
        </td>
      </tr>
  </table>
  </div>

</form>
</div>
