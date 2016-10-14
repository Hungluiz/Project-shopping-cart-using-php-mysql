<div class="left">
	<?php
		
		if(isset($_GET['ac'])){
			$tam = $_GET['ac'];	
		}else{
			$tam = '';	
		}
		if($tam=='them'){
			include('modules/quanlyhieusp/them.php');	
		}
		if($tam=='sua'){
			include('modules/quanlyhieusp/sua.php');	
		}
		
	?>      	
</div>
<div class="right">
	<?php
		include('modules/quanlyhieusp/lietke.php');		
	?>      	
</div>