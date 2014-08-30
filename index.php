<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>VK.loc</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="css/telo.css" />
</head>

<body>
	<?php include('template/header.php'); ?>
	<div class="main">
		<?php include('template/authorization_body.php'); ?>
	</div>
	<?php include('template/footer.php'); ?>
</body>
</html>
<?php
	/*if($_POST['login'] != "" && $_POST['email'] != "" && $_POST['password'] != "")
	{
	$db=new
	PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
	$db->query('insert into users (email, login, password) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '", "' . $_POST['password'] . '")');
	$thankYouMessage = $_POST['login'];}
	if(isset($thankYouMessage)) { echo '<h2>' . $thankYouMessage . '</h2>';}
*/
?>

