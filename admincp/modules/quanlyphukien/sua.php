<?php
	$sql="select * from phukien where id_phukien='$_GET[id]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>

<form action="modules/quanlyphukien/xuly.php?id=<?php echo $dong['id_phukien']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1" cellspacing="0px">
  <tr>
    <td colspan="2"><div align="center">Sữa phụ kiện</div></td>
  </tr>
  <tr>
    <td>Tên phụ kiện</td>
    <td><input type="text" name="tenphukien" value="<?php echo $dong['tenphukien'] ?>"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2">
    	<div align="center">
        <input type="submit" name="sua"  value="Cập nhật" class="button"/>
    	</div>
   </td>
  </tr>
</table>
<p>&nbsp;</p>	
</form>

    <p><a href="index.php?quanly=quanlyloaisp&ac=them" class="button">Quay về Thêm</a></p>
    

