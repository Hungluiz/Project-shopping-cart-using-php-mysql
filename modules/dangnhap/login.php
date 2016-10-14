
<?php 
	// code php xử lý validate login
	$error = array();
	$data = array();
	if(!empty( $_POST['btnLogin'] )){
		// thêm dữ liệu
		$data["txtUsername"] = isset( $_POST["txtUsername"]) ? $_POST["txtUsername"]: '';
				$data["txtPassword"] = isset( $_POST["txtPassword"]) ? $_POST["txtPassword"]: '';	
				//kiểm tra nếu người dùng không nhập dữ liệu thì thông báo lôi
				if(empty($data["txtUsername"])){
					$error["txtUsername"] = 'Bạn chưa nhập tên đăng nhập!!';	
				}
				if(empty($data["txtPassword"])){
					$error["txtPassword"] = 'Bạn chưa nhập password!!';	
				}
		// Sau khi kiểm tra không có lổi thì tiến hành xử lý
	}
?>
<form  method="post" id="form_login">
  <table width="250" border="0" height="160">
    <tr>
    	<td>
        	<h3 style="font-size:20px;font-weight:500">Login</h3> 
        </td>
    </tr>
    <tr>   
    	<td width="100">  
          <div class="input-group" style="margin-top: 10px;">
  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="txtUsername" class="form-control" placeholder="Tên đăng nhập" aria-describedby="basic-addon1" style="width:250px;">
</div>
         </td>
    </tr>
    <tr>
    	<td>
        	<div class="input-group" style="margin-top: 10px;">
  			<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
  			<input type="password" name="txtPassword" class="form-control" placeholder="Mật khẩu" aria-describedby="basic-addon1" style="width:250px;">
     	</td>
    </tr>
    <tr>
    	<td colspan="2"></tđ>
          <div align="left">
            <input type="submit" id="btn_login" name="btnLogin"  value="OK" class="btn btn-primary" style="width: 250px;padding: 10px 150px 10px 137px;margin-top: 10px;font-size:17px">       
      </div>        
    </tr>
  </table>
</form>
