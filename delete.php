<?php
// Autor: Kleber Gracia Soares - Formado em Ciência da Computação
// Profissão: Analista Desenvolvedor Pleno
// Conexão com Banco de Dados 
include('conexao.php');

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