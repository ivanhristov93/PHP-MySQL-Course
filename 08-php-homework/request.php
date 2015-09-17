<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
	<form action="response.php" method = "POST" >
        Име: 
        <input type="text" name="userName" />
    <br />
        Стара парола: 
        <input type="password" name="oldPass" />
    <br />
        Нова парола:
        <input type="password" name="newPass" />
    <br />
        Повтори паролата:
        <input type="password" name="newPass" />
    <br />
        <input type="submit" value="Изпрати" />
       
</form>

</body>
</html>