<?php
// Autor: Kleber Gracia Soares - Formado em Ciência da Computação
// Profissão: Analista Desenvolvedor Pleno
// Conexão com Banco de Dados 
include('conexao.php');


/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php. Fonte: https://www.devmedia.com.br/ */ 
session_start();
if((!isset ($_SESSION['sid']) == true))
{
  header('location:login.php');
}
$sid = $_SESSION['sid'];
//echo('Session ID: ' .$_SESSION['sid']);  



$delete = $_GET['del']; 
$sql = "delete from student where id = '$delete'"; 
 
if(mysqli_query($connection,$sql))
           {
 
            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
 
           }
 
?>