<?
$host='localhost'; 			// Local do Servidor
$user='usuariobanco'; 		// Nome de usuario do Mysql
$password='suasenha'; 		// Senha do servidor
$database='nomedatabase'; 	// Base de dados

$connection = mysqli_connect($host, $user, $password);
$db = mysqli_select_db($connection, $database);   

?>