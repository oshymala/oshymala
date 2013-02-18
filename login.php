<!DOCTYPE html>

<html>
<head>
</head>

<body>	
	<?php
	$host="sqletud.univ-mlv.fr";
	$user="ncardena";
	$passwd="veiyou5U";
	$bdd="ncardena_db";
	// Connexion au serveur
	mysql_connect($host, $user, $passwd)
		or die("Impossible de se connecter");
	// Sélection de la base
	mysql_select_db($bdd)
		or die("Connection à la base impossible");
	?>
	
	<?php
	function connection(){
		$login = $_GET['login'];
		$password = $_GET['password'];
		
		$password = sha1($password);
		
		$query = "SELECT * FROM Login WHERE login == $login AND password == $password";
		$res = mysql_query($query) or die("utilisateur inexistant ou mot de passe incorrect");
		
		$data = mysql_fetch_assoc($res);
		
		setcookie("login", $data['login']);
		setcookie("password", $data['passwod']);
		setcookie("admin", $data['admin']);
		setcookie("name", $data['name']);
		setcookie("id", $data['id']);
	}
	
	function newUser(){
		$login = $_GET['login'];
		$password = $_GET['password'];
		$name = $_GET['name'];
		
		$password = sha1($password);
		
		$query = "INSERT INTO Login ('login', 'passwod', 'admin', 'name') VALUES($login, $password, 0, $name)";
		$res = mysql_query($query) or die("Erreur ajout utilisateur");
	}
	
	function 
	?>
</body>

</html>