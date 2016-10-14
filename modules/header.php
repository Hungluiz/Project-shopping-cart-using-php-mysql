<?php
	$ok=1;
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $k=>$v)
		{
			if(isset($k))
			{
			$ok=2;
			}
		}
	}

	if ($ok != 2)
	 {
		$tongsp=0;
	} else {
		$items = $_SESSION['cart'];
		
		$tongsp = count($items);
	}
?>
<div class="header">
	<div class="tieude_header">
    	<div class="tieude_giohang">
        	<a href="modules/giohang/show_cart.php"><p><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:20px;color:#FFF;"></i>&nbsp;&nbsp;<?php echo $tongsp; ?>&nbsp;&nbsp;sản phẩm</p></a>
        </div>
    	<div class="lienhe_icon_header">
        	<p style="color:rgb(93, 88, 88);"><a target="_blank" href="https://www.facebook.com/HungLuiz4"><i class="fa fa-facebook-official" aria-hidden="true" ></i></a>&nbsp;&nbsp;&nbsp;<a target="_blank" href="https://plus.google.com/u/0/118226486954248665957/posts"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
        </div>
    </div>
	<div class="logo_header">
    	<a href="index.php"><img src="../images/logo_shop_IT.png" width="180" height="92"></a>
    </div>
    <div class="giaohang">
    	<table width="500" border="0" cellpadding="5px" cellspacing="10px">
    		<tr>
            	<td>
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:40px;color:#999;"></i>            </td>
                <td>
                    Đặt hàng nhanh <br />
                    Gọi ngay 18004750
                </td>
                <td>
                    <i class="fa fa-truck" aria-hidden="true" style="font-size:40px;color:#999;"></i>            </td>
                <td>
                    Miễn phí vận chuyển <br />
                    Với đơn hàng trên 100.000đ
                </td>
        	</tr>
            
        </table>
    </div>
    <div class="lienhe_header">
    </div>
	<div class="tiemkiem">
    	<div class="">
        	<form action="" method="get" id="search" enctype="multipart/form-data">
            <div class="col-lg-6">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Tiềm theo tên, hiệu sản phẩm...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"style="color: #fff;background: #9E9B9B;"><i class="glyphicon glyphicon-search" ></i></button>
                  </span>
                </div><!-- /input-group -->
  			</div><!-- /.col-lg-6 -->
              <input name="xem" type="hidden" value="tiemkiem" />
              </form>
        </div>
    </div>
 
</div>