<div class="left">
	<?php
		
		if(isset($_GET['ac'])){
			$tam = $_GET['ac'];	
		}else{
			$tam = '';	
		}
		if($tam=='them'){
			include('modules/quanlyphukien/them.php');	
		}
		if($tam=='sua'){
			include('modules/quanlyphukien/sua.php');	
		}
		
	?>      	
</div>
<div class="right">
	<?php
		include('modules/quanlyphukien/lietke.php');		
	?>      	
</div>