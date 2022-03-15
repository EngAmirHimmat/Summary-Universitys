<?php include 'includes/database_connect.php';?> 
<?php include 'includes/functions.php';?>
<?php
if (isset($_POST['singin'])) 
{

	$username=strip_tags($_POST['username']);
	$password=md5(strip_tags("amirhimat".$_POST['password']."amirhimat"));
	if (checkUser($username) == true) 
	{
				if (login($username, $password)==true) {
					header('Location: users/index.php');
				}
				else{
					setcookie('message','كلمة المرور المدخلة غير صحيحة');
					header('Location: singin.php');
				}
	}
	else
	{
		setcookie('message','إسم المستخدم هذا غير موجود');
		header('Location: singin.php');
	}
}
?>
<?php 
if (isset($_POST['singup'])) {
			$user_name=strip_tags($_POST['user_name']);
			$user_pass=md5(strip_tags("amirhimat".$_POST['user_pass']."amirhimat"));
			$reuser_pass=md5(strip_tags("amirhimat".$_POST['reuser_pass']."amirhimat"));
			$user_email=strip_tags($_POST['user_email']);
			$user_phone=strip_tags($_POST['user_phone']);
			
			if (checkUser($user_name)==true) {
				setcookie('message','إسم المستخدم موجود بالفعل');
				header('Location: singup.php');
			}
			elseif ($reuser_pass != $user_pass) {
				setcookie('message','كلمة المرور غير متطابقة مع  تكرار كلمة المرور');
				header('Location: singup.php');
			}
			else{
				signUp($user_name,$user_pass,$user_email,'2',$user_phone);
				header('Location: users/index.php');
			}
	
}
?>
<?php include 'includes/database_close.php';?> 