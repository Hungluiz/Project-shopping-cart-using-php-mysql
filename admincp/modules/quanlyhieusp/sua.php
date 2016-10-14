<?php
	$sql="select * from hieusp where id_hieusp=$_GET[id]";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>

<form action="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1" cellspacing="0px">
  <tr>
    <td colspan="2"><div align="center"><strong>SỮA HIỆU SẢN PHẨM</strong></div></td>
  </tr>
  <tr>
    <td>Tên hiệu sản phẩm</td>
    <td><input type="text" name="tenhieu" value="<?php echo $dong['tenhieu'] ?>"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2">
    	<div align="center">
        <input class="button"  type="submit" name="sua"  value="Cập nhật" />
    	</div>
   </td>
  </tr>
</table>
<p>&nbsp;</p>	
</form>

    <p><a href="index.php?quanly=quanlyhieusp&ac=them" class="button_them">Quay về Thêm</a></p>
    
	<style type="text/css">
.button_them {
	-moz-box-shadow:inset 0px 0px 5px -3px #97c4fe;
	-webkit-box-shadow:inset 0px 0px 5px -3px #97c4fe;
	box-shadow:inset 0px 0px 5px -3px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0) );
	background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background-color:#3d94f6;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0px;
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:45px;
	line-height:45px;
	width:200px;
	text-decoration:none;
	text-align:center;
	text-shadow:0px -1px 0px #1570cd;
}
.button_them:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6) );
	background:-moz-linear-gradient( center top, #1e62d0 5%, #3d94f6 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background-color:#1e62d0;
}.button_them:active {
	position:relative;
	top:1px;
}</style>

