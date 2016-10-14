<div class="content">
	
	<?php
		
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];	
		}else{
			$tam='';
			require "modules/trangchu.php";
				
		}if($tam=='quanlyloaisp'){
			include('modules/quanlyloaisp/main.php');	
		}if($tam=='quanlychitietsp'){
			include('modules/quanlychitietsp/main.php');	
		}if($tam=='quanlyhieusp'){
			include('modules/quanlyhieusp/main.php');	
		}if($tam=='quanlyphukien'){
			include('modules/quanlyphukien/main.php');	
		}
		
		
	?>    
      	
</div>
<div class="clear"></div>