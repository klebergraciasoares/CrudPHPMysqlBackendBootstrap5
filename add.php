<?php
	// Autor: Kleber Gracia Soares - Formado em Ciência da Computação
	// Profissão: Analista Desenvolvedor Pleno
	// Conexão com Banco de Dados
	include('conexao.php'); 
    if(isset($_POST['submit']))
        {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$mobile = $_POST['mobile']; 
 
			$sql = "insert into student(name,address,mobile)values(' $name',' $address',' $mobile')";
 
			if(mysqli_query($connection,$sql))
			{
				echo '<script> location.replace("index.php")</script>';  
			}
			else
			{
				echo "Algo deu errado" . $connection->error;
			}
        }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                        <h1> Adicionar novo Aluno - By Galaxyz do Brasil </h1>
                    </div>
                    <div class="card-body">
 
                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control"  placeholder="Entre com o nome completo">
                        </div>
 
                        <div class="form-group">
                            <label>Endereco</label>
                            <input type="text" name="address" class="form-control"  placeholder="Entre com o endereco">
                        </div>
 
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Entre com o telefone">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Registrar">
                        </form>
                  
                    </div>
                    </div>
 
                </div>
            
            </div>
        </div>
 
</body>
</html>