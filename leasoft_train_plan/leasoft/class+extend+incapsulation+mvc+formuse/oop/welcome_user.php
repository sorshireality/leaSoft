<!DOCTYPE html>
<html>
<head>
	<title>Привет</title>
</head>
<body>
<section>Привет пользователь, ты создал персонажа с такими данными :<br>
<table>
	<tr><th>Имя</th><th>Фамилия</th></tr>
	<tr><td><?php $_COOKIE['username'] ?></td><td><?php $_COOKIE['usersurname']?></td></tr>
</table>
</section>
</body>
</html>