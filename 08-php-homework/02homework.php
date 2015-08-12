<form action="dota.php?submit=true&test=2" method="POST">
		Потребителско име: 
		<input type="text" name="username" />
    <br />
		Парола:
		<input type="password" name="pass" />
    <br />
		Повторете паролата:
		<input type="password" name="repass" />
	<br />
		Таен въпрос:
		<input type="text" name="secretQuestion" />
	<br />
		Таен отговор:
		<input type="text" name="secretAnswer" />
	<br />
		Email: <input type="text" name="mail" />
    <br />
		Име:
		<input type="text" name="name" />
	<br />
		Фамилия:
		<input type="text" name="fatherName" />
	<br />	
		Пол:
		<input type="radio" name="gender" value="Male" /> Мъж
		<input type="radio" name="gender" value="Famale" /> Жена
	<br />
		Рждена дата:
		<input type="text" name="birthdayDay" />
	<br />	
		<input type="submit" value="Изпрати" />
</form>