<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>mysite.ua</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="authorization.css" />
</head>

<body>
	<h1>Авторизация</h1>
	<form method="POST" align="" class="Authorization">
		<div class="abody">
			<a href="http://mysite.ua/registration.php" class="lost">Напомнить пароль?</a>
			<p class="login">ВОЙТИ</p>
			  <div class="field">
					<input type="text" name="login" placeholder="Логин"/>
					<input type="text" name="email" placeholder="Email"/>
					<input type="password" name="password" placeholder="Пароль"/>
			  </div>
			  <p><input type="checkbox" name="remember" class="remember">Запомнить пароль</p>
		</div>
		<div class="afooter">
			<input type="submit" value="Войти"/>
			<a href="/registration.php" class="akaunt">Новый аккаунт</a>
		</div>
	</form>
</body>
</html>
<?php
	if($_POST['login'] != "" && $_POST['email'] != "" && $_POST['password'] != "")
	{
	$db=new
	PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
	$db->query('insert into users (email, login, password) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '", "' . $_POST['password'] . '")');
	$thankYouMessage = $_POST['login'];}
	if(isset($thankYouMessage)) { echo '<h2>' . $thankYouMessage . '</h2>';}
?>

