<?php 

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(empty($name) OR empty($email) OR empty($message))
{
	die('Пожалуйста, заполните все поля!');
}
elseif(mb_strlen($name) > 250 OR mb_strlen($email) > 250)
{
	die('Слишком длинное имя или email');
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
{
	die('Введите правильный email');
}
else
{


	$fh = fopen('data/requests.txt', 'a');
	$date = date('F d, y, H:i');
	$rowDate = $date;
	$rowName = 'Имя: ' . $name;
	$rowEmail = 'Email: ' . $email;
	$rowMessage = $message;
	$data = "\r\n" . $rowDate . "\r\n" . $rowName . "\r\n" . $rowEmail . "\r\n" . $rowMessage . "\r\n" . "=============";
	fwrite($fh, $data);
	fclose($fh);

	header('Location: index.php');
}


echo '<pre>';
var_dump($_POST);
echo '</pre>';

 ?>