<?php 

function cadastracliente($conexao, $nome, $endereco, $telefone, $email, $idade, $salario){
	
	$sql="insert into cliente (nome, endereco, telefone, email, idade, salario) values('$nome','$endereco','$telefone','$email','$idade','$salario')";
	
	if (mysqli_query($conexao, $sql)){
		echo "New record created successfully";
	} else {
		echo "Error: " .$sql ."<br>" .mysqli_error($conexao);
	}
	mysqli_close($conexao);
} 
?>