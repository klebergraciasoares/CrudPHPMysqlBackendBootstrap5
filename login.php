<?php
	// Autor: Kleber Gracia Soares - Formado em Ciência da Computação
	// Profissão: Analista Desenvolvedor Pleno
	// Conexão com Banco de Dados
	include('conexao.php'); 
    
	if(isset($_POST['submit']))
	{
		$uid = $_POST['userid'];
		$pw = $_POST['password'];

		$sql = "select id, name, userid, password from users_crud where userid = '$uid' and password = '$pw'";
		$run = mysqli_query($connection,$sql);
		
		while($row=mysqli_fetch_array($run))
		{
			$userid = $row['userid'];
			$name = $row['name'];			
		}
		if(!empty($userid)){ 
			session_start();
			$_SESSION['sid'] = session_id();
			echo '<script> location.replace("index.php")</script>'; 	 		
		}else{
			unset($_SESSION['sid']); 
			echo "Erro ao tentar efetuar o login.";	  	
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP+Mysql Back end Bootstrap 5 - By Kleber Soares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <br/>
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h1> Login - By Galaxyz do Brasil </h1>
                    </div>
                    <div class="card-body">
 
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="userid" id="userid" class="form-control"  placeholder="Entre com o login">
                        </div>
 
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="password" id="password"  class="form-control"  placeholder="Entre com a senha">
                        </div>
 
                        <br/>
						<p> Login: admin senha: 123</p>
                        <input type="submit" class="btn btn-primary" name="submit" value="Logar-se">
                        </form>
                  
                    </div>
                    </div>
 
                </div>
            
            </div>
        </div>
 
</body>
</html>