<?php
	session_start();
	if(isset($_SESSION['cart']))
    {
        $cart = $_SESSION['cart'];
		
		$id=$_GET['id'];
		if($id == 0)
		{
			unset($_SESSION['cart']);
			
		}
		else
		{
			unset($_SESSION['cart'][$id]);
			
		}
		$url = "location:show_cart.php";
		function Redirect($url) {
			flush(); // Flush the buffer
			ob_flush();
			header("location:show_cart.php"); // Rewrite the header
			die;
		}
        exit();
    }
	else
    {
		
	
		
    }
	
?>