<?php 
	session_start();
	include('modules/lib/function.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    
	<link rel="stylesheet" type="text/css" href="style/style.css" >
    
	<script type="text/javascript" src="modules/js/jquery.js"></script>
    <!---- Include the SDK JavaScript on your page once --->
    
    <div id="fb-root"></div>
	<title>Bán Hàng Công Nghệ</title>
</head>

<body>
<div class="wrapper_total">
<div class="wrapper_main">
    	<?php
			include('admincp/modules/config.php');
			include('modules/header.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');
			
        ?>
        <?php 
			// Kiểm tra đăng nhập
			if( isset($_POST["btnLogin"]) ){
				$user = $_POST["txtUsername"];
				$pass = $_POST["txtPassword"];
				 // Mã hóa password sang MD5
				
				$qr = "
					SELECT id_User,username,password,id_Group,hoten FROM dangnhap
					WHERE username = '$user' AND password = '$pass'
				";
				$query = mysql_query($qr);
				if( mysql_num_rows($query) == 1){ 
					$row = mysql_fetch_array($query); 
						$_SESSION["id_User"] = $row['id_User'];
						$_SESSION["username"] = $row['username'];
						$_SESSION["id_Group"] = $row['id_Group'];
						$_SESSION["hoten"] = $row['hoten'];
				}
				
			}
		?>
		<?php
            // Button Thoát
            /*
                Nếu người dùng nhấn nút thoát thì các SESSION sẽ được hủy bỏ
                và nó sẽ hiện lại Form Đăng nhập
            */
            if( isset($_POST["btnThoat"]) ){
                unset($_SESSION["id_User"]);
                unset($_SESSION["username"]);
                unset($_SESSION["id_Group"]);
                unset($_SESSION["hoten"]);
            }
            
        ?>

    </div>
    </div>	    
</body>
</html>
