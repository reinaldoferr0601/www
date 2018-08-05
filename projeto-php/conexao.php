<?php 
$conexao = mysqli_connect('localhost','root','','projeto_php');
if($conexao){
	echo "conectado com sucesso";
} else{
	$erro = mysqli_error($conexao);
	echo "aconteceu um erro: $erro";
}


