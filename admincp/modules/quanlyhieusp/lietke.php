<?php
	$sql= "select * from hieusp order by id_hieusp desc";
	$run = mysql_query($sql);
?>
<table width="104%" border="1" cellspacing="0px">
  <tr style="height:40px ;vertical-align:top bottom; ">
    <th width="12%"><div align="center"><strong>ID</strong></div></th>
    <th width="28%"><div align="center"><strong>TÊN HIỆU</strong></div></th>
    <th width="33%"><div align="center"><strong>THỨ TỰ</strong></div></th>
    <th colspan="2"><div align="center"><strong>QUẢN LÝ</strong></div></th>
  </tr>
  <?php
  	// xuất dữ liệu từ csdl lên form
	// khai báo biến và i++ (i tương ứng id)
	
  	$i=0;
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tenhieu'] ?></div></td>
    <td><div align="center"><?php echo $dong['thutu'] ?></div></td>
    <td width="10%"><div align="center"><a href="index.php?quanly=quanlyhieusp&ac=sua&id=<?php echo $dong['id_hieusp'] ?>"><button type="button" class="btn btn-success" name="muahang"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></div></td>
    <td width="17%"><div align="center"><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp'] ?>"><button type="button" class="btn btn-danger" name="muahang"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></div></a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
