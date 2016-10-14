<?php
	$sql = "select * from hieusp,chitietsp,loaisp where chitietsp.id_loaisp=loaisp.id_loaisp and chitietsp.id_hieusp=hieusp.id_hieusp order by chitietsp.id_sp desc";
	$run = mysql_query($sql);
?>

<table width="98%" border="1">
  <tr>
    <th width="6%" height="65"><div align="center">ID</div></th>
    <th width="18%"><div align="center">Tên sản phẩm</div></th>
    <th width="13%"><div align="center">Hình ảnh</div></th>
    <th width="7%"><div align="center">Giá</div></th>
    <th width="14%"><div align="center">Loại sp</div></th>
    <th width="9%"><div align="center">Thứ tự
      </td>
    </div>
    <th width="18%"><div align="center">Hãng sản xuất</div></th>
    <th colspan="2"><div align="center">Quản lý</div></th>
  </tr>
  <?php 
  		$i = 0;
 		while($dong = mysql_fetch_array($run)){ 
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><div align="center"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width=99 height="70"></div></td>
    <td><div align="center"><?php echo $dong['gia']; ?></td>
    <td><div align="center"><?php echo $dong['tenloaisp']; ?></div></td>      
    <td><div align="center"><?php echo $dong['thutu']; ?></div></td>
    <td><div align="center"><?php echo $dong['tenhieu']; ?></div></td>   
    <td width="6%"><div align="center"><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>"><button type="button" class="btn btn-success" name="muahang"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></div></td>
    <td width="9%"><div align="center"><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>"><button type="button" class="btn btn-danger" name="muahang"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></div></td>
  </tr>
    <?php 
	$i++;
		}
  ?>
</table>
