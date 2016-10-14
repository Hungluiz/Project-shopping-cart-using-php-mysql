<?php
	$sql= "select * from loaisp order by id_loaisp desc";
	$run = mysql_query($sql);
?>
<table width="85%" height="51" border="1" cellspacing="0px">
  <tr>
    <th width="16%"><div align="center">ID</div></th>
    <th width="26%"><div align="center">Tên sản phẩm</div></th>
    <th width="20%"><div align="center">Thứ tự</div></th>
    <th colspan="2"><div align="center">Quản lý</div></th>
  </tr>
  <?php
  	// xuất dữ liệu từ csdl lên form
	// khai báo biến và i++ (i tương ứng id)
  	$i=0;
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><div align="center"><?php echo $dong['thutu'] ?></div></td>
    <td width="20%"><div align="center"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>"><button type="button" class="btn btn-success" name="muahang"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></div></td>
    <td width="18%"><div align="center"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>"><button type="button" class="btn btn-danger" name="muahang"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
