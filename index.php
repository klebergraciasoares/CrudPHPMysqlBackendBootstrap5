<!DOCTYPE html>
<html lang="en">
<?Php 
	// Autor: Kleber Gracia Soares - Formado em Ci�ncia da Computa��o
	// Profiss�o: Analista Desenvolvedor Pleno
	// Conex�o com Banco de Dados... Bugfix2
	include('conexao.php');

	/* esse bloco de c�digo em php verifica se existe a sess�o, pois o usu�rio pode
	 simplesmente n�o fazer o login e digitar na barra de endere�o do seu navegador
	o caminho para a p�gina principal do site (sistema), burlando assim a obriga��o de
	fazer um login, com isso se ele n�o estiver feito o login n�o ser� criado a session,
	ent�o ao verificar que a session n�o existe a p�gina redireciona o mesmo
	 para a index.php. Fonte: https://www.devmedia.com.br/  */
	session_start();
	if((!isset ($_SESSION['sid']) == true))
	{
	  header('location:login.php');
	}
	$sid = $_SESSION['sid'];
	//echo('Session ID: ' .$_SESSION['sid']);  
	
?>
<head> 
    <meta charset="UTF-8">
    <?Php header('Content-Type: text/html; charset=utf-8'); ?> 

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP+Mysql Back end Bootstrap 5 - By Kleber Soares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <br/>
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h1> Crud PHP+Mysql Back end Bootstrap 5 - By Kleber Soares </h1>
                    </div>
                    <div class="card-body">
                  
                    <button class="btn btn-success"> <a href="add.php" class="text-light"> Novo </a> </button>
                        
                        <br/>
                        <br/>
 
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">RA</th>
                            <th scope="col">Nome</th>
                            <th scope="col"><?Php echo(utf8_encode('Endere�o')); ?></th>
                            <th scope="col">Telefone</th>
                            <th scope="col"><?Php echo(utf8_encode('Op��es')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
 
                                $sql = "select * from student";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;
 
                                while($row = mysqli_fetch_array($run))
                                {
                                    $uid = $row['id'];
                                    $name = $row['name'];
                                    $address = $row['address'];
                                    $mobile = $row['mobile'];
                                ?>
 
                                   <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $mobile ?></td>
 
                                        <td>
                                        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Editar</a> </button> &nbsp;
                                       <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Deletar </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>

						<form method="post" action="logout.php"> 
							<input type="submit" class="btn btn-primary" name="submit" value="Finalizar"> - 
							<?Php echo('Sessao Login: ' .$_SESSION['sid']); ?> 
                        </form>
							

						
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>	