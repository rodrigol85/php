<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert dati mySql</title>
</head>
<body>

	<form action="insert.php" method="POST">
	
		<p>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome">
		</p>
		<p>
			<label for="cognome">Cognome</label>
			<input type="text" name="cognome" id="cognome">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
		</p>
		<input type="submit" value="Invia">
	
	</form>

</body>
</html>