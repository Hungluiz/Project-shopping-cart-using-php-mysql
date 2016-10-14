<?php 
	
?>
        <div class="content"> 
        
   			<div class="left">
            	<?php
					include('modules/left/danhsach.php');
					include('modules/right-spxemnhieu/spbanchaynhat.php');
				?>
            </div>            
            <div class="right">
            	<div class="right-slideshow">
						<?php
                            include('modules/left/slideshow.php');
                        ?>
                </div>
            	<?php
					if(isset($_GET['xem'])){
						$tam = $_GET['xem'];	
					}else{
						$tam = '';	
					}if($tam == 'chitietloaisanpham'){
						include('modules/right/chitietloaisanpham.php');
					}else if($tam == 'chitietsanpham'){
						include('modules/right/chitietsanpham.php');					
					}else if($tam == 'chitiethieusp'){
						include('modules/right/chitiethieusp.php');
					}else if($tam == 'tiemkiem'){
						include('modules/tiemkiem.php');
					}
					else if($tam == 'muahang'){
						include('modules/giohang/show_cart.php');
					}
					else
						include('modules/right/sanphammoinhat.php');
				    
				?>
                
            </div> 
                       
        </div>
<div class="clear">
</div>