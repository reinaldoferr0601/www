<?php 
	include("banco-cliente.php");
	include("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Clientes</title>
</head>
<body>
	<h1>Cadastro de Clientes</h1>
	<hr>

	<form action="cadastro-cliente.php">
		Nome: <input type="text" name="nome"> <br>
		Endereço: <input type="text" name="endereco"> <br>
		Telefone: <input type="text" name="telefone"> <br>
    	Email: <input type="email" name="email"> <br>
		Idade: <input type="text" name="idade"> <br>
		Salario: <input type="text" name="salario"> <br>

		<input type="submit" name="btnsalvar" value="Cadastrar">
	</form>

	<?php 
		if($_POST){
			//1ro passo capturar os dados do formulario
			$nome=$_POST['nome'];
			$endereco=$_POST['endereco'];
			$telefone=$_POST['telefone'];
			$email=$_POST['email'];
			$idade=$_POST['idade'];
			$salario=$_POST['salario'];

			if(cadastracliente($conexao, $nome, $endereco, $telefone, $email, $idade, $salario)){
				echo "Cadastro realizado com sucesso";
			} else {
				$erro = mysqli_error($conexao);
				echo "Aconteceu o erro: $erro";
			}

		}
	 ?>
</body>
</html>
