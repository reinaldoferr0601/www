<?php 
function cadastracliente($conexao, $nome, $endereco, $telefone, $email, $idade, $salario){
	$sql="insert into cliente (nome, endereco, telefone, email, idade, salario) 
	values('{$nome}','{$endereco}','{$telefone}','{$email}',{$idade},{$salario})";
	return mysqli_query($conexao,$sql);
}
 ?>