<?php 

include('classes/User.php');

if(!empty($_POST['login']) and !empty($_POST['email']) and !empty($_POST['date']) and !empty($_POST['pass'])) {
	$user = new User();
	$user->registration($_POST);
	$result = $user->result;
	$result1 = $user->id1;

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Vk.loc</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<script src="../js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="../js/myscripts.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/registration.css" />
</head>
<body>
	<div  class="text_login">
		<?php if(isset($result)): ?>
			<p><?php echo $result; ?></p>
			<p><?php echo $result1; ?></p>
		<?php endif; ?>
	</div>
	<form method="POST" align="" class="Registration" id="loginform">
			<h2>Регистрация</h2>
			<div class="polosa"></div>
			<div class="nazvanie">
				<p>Логин</p>
				<p>Электронная почта</p>
				<p>Дата рождения</p>
				<p>Пароль</p>
			</div>
		<ul class="field">
				<li><input type="text" name="login" placeholder="Логин"/></li>
				<li><input type="text" name="email" placeholder="Email"/></li>
				<li><input type="text" name="date" placeholder="Дата рождения"/></li>
				<li><input type="password" name="pass" placeholder="Пароль"/></li>
		</ul>	
		<div class="button">
			<input type="submit" name="submit" value="Зарегистрироваться"/>
		</div>	
	</form>
</body>
</html>