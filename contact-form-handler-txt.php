<?php 
$max_filesize = 2048; //KB
$allowed_types = ['image/jpeg', 'image/png'];
$allowed_extensions = ['jpg', 'jpeg', 'png'];

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(empty($name) OR empty($email) OR empty($message)) //check for empty fields
{
	die('Пожалуйста, заполните все поля!');
}
elseif(mb_strlen($name) > 250 OR mb_strlen($email) > 250)	//check for name and email lenght
{
	die('Слишком длинное имя или email');
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) //validate email
{
	die('Введите правильный email');
}
else
{

	$fh = fopen('data/requests.txt', 'a'); //open or creat file with data (request.txt)
	$date = date('F d, y, H:i'); //edit the date in correct format
	$rowDate = $date; //create the variable with date ti write in file
	$rowName = 'Имя: ' . $name; //create the variable wih name to write in file
	$rowEmail = 'Email: ' . $email; //create the variable with email to write in file
	$rowMessage = $message; //create the variable with message text to writ in file

	$image = $_FILES ['image']; //get image from the array
	$tmp_name = $image['tmp_name']; //get tmp-name of iage from the array
	$original_name = $image['name']; //get name of iage from the array
	$files_amount = count($original_name); //count the amout of uploaded files

	for($i = 0; $i < $files_amount; $i++) { //start the cicle for mages

		if($original_name[$i]) {

			$dotpos = strripos($original_name[$i], '.'); //count the position of "."
			$extension = substr($original_name[$i], $dotpos+1); //get the extension of file


			if(filesize($tmp_name[$i]) > ($max_filesize * 1024)) { //validate the file on the file size
				die('Файл превышает максимально допустимый размер');
			}
			elseif(!in_array($image['type'][$i], $allowed_types) OR !in_array($extension, $allowed_extensions)){ //validate the file for the correct type
				die('Не тот формат файла');
			}
			else {
				$dir = 'uploads'; //create the variable 
				$subdir = mt_rand(0, 10); //generate random name of subdir
				$path = $dir . '/' . $subdir; //merge full path for image

	
				if(!is_dir($path)) //check - is there the folder for aploads. If absent - create 
					mkdir($path);
				
				do {
					$name = random_string(8); //generate ranom name of the file
					$filename = $name . '.' . $extension;
					$is_exist = file_exists($path . '/' . $filename);
				} while($is_exist);
	
				$result = move_uploaded_file($tmp_name[$i], $path. '/' . $filename); //move uploaded file to a new folder
				if(!$result)
				{
					die('Произошла ошибка');
				}
				$link[i] = realpath($path . '/' . $filename); //create array of linkf for dowloading files
				$links = $links ."\r\n" . "Файл #" . ($i+1) . " : " . $link[i]; //create string for write into the file
			}
		}
	}

	$data = "\r\n" . $rowDate . "\r\n" . $rowName . "\r\n" . $rowEmail . "\r\n" . $rowMessage . $links . "\r\n" . "============="; //create data from form into text file
	fwrite($fh, $data); //write data into the text file
	fclose($fh); //close the text file
}

function random_string($length = 10) { //function for generating names for files
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


 ?>