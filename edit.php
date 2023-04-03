<?php
// Autor: Kleber Gracia Soares - Formado em Ci�ncia da Computa��o
// Profiss�o: Analista Desenvolvedor Pleno
// Conex�o com Banco de Dados
include('conexao.php');

$edit = $_GET['edit'];
$sql = "select * from student where id = '$edit'";
$run = mysqli_query($connection,$sql);
 
 
while($row=mysqli_fetch_array($run))
{
    $uid = $row['id'];
    $name = $row['name'];
    $address = $row['address'];
    $mobile = $row['mobile'];
}
 
?>
 
<?php
    if(isset($_POST['submit']))
        {

			//echo($_POST['id']);
			//exit();

			$id = $_POST['id'];
			$edit = $_GET['edit'];  
			$name = $_POST['name'];
			$address = $_POST['address'];
			$mobile = $_POST['mobile'];

			$sql = "update student set name= '$name',address= '$address',mobile='$mobile' where id =  '$id'";

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
                        <h1> Editando Estudante </h1>
                    </div>
                    <div class="card-body">
 
                    <form action="edit.php" method="post">

                        <div class="form-group">
                            <label>ID</label>
                            <label><?php echo $uid; ?></label>
                            <input type="text" name="id" class="form-control invisible"  placeholder="#" value="<?php echo $uid; ?>" >
                        </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control"  placeholder="Nome" value="<?php echo $name; ?>">
                        </div>
 
                        <div class="form-group">
                            <label><?Php echo(utf8_encode('Endere�o')); ?></label>
                            <input type="text" name="address" class="form-control"  placeholder="Endere�o" value="<?php echo $address ?>">
                        </div>
 
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Telefone" value="<?php echo $mobile ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Editar">
                        </form>
                    </div>
                    </div>
 
                </div>
            
            </div>
        </div>
 
</body>
</html>