<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<link rel="stylesheet" href="./css/style.css">
	<style type="text/css">
		body{
			background:#ccc;
		}
		
	</style>
</head>
<body >
<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
		<table  class="table-login">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr class="table-login_td">
				<td>Tài khoản</td>
				<td ><input type="text" name="username" ></td>
			</tr>
			<tr class="table-login_td">
				<td>Mật khẩu</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr class="them_menu3">
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập" class="input_login"></td>
			</tr>
		</table>
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
