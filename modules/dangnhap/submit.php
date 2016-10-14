<?php
if($_POST)
{
    $username = trim($_POST['txtUsername']);
    $password = trim($_POST['txtPassword']);
    //neu dang nhap dung
     $qr = "SELECT * FROM dangnhap 
		WHERE username = '$username' AND password = '$password'
	";
	$user = mysql_query($qr);
	if(mysql_num_rows($user) == 1 ){
		$row = mysql_fetch_array($user);	
	
	
?>
<table border="1" cellpadding="5" cellspacing="0" >
    <tr>
        <td colspan="2">Đăng nhập thành công</td>
    </tr>
    <tr>
        <td><strong>Xin chào:</strong> </td>
        <td><?php echo $row['username'] ?></td>
    </tr>
</table>
<?php
    }else{
        //neu dang nhap sai
        echo 'false';
    }
}
?>
