<?php

$oldpassword = 'money';

$name = $_POST["userName"];
$oldpass = $_POST["oldPass"];
$newPass = $_POST["newPass"];
$newPass = $_POST["newPass"];
if ($name === 'first-user' && $oldpass === $oldpassword && $newPass === $newPass)
{
	echo "Успешна смяна";
}
else 
{
	echo "Грешка";
}
?>