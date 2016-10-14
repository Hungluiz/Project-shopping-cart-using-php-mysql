

<?php 
	function LayTenHieuSP(){
	
		$qr = "
			SELECT * FROM hieusp
			ORDER BY id_hieusp;
		";
		return mysql_query($qr);
			
	}
?>