<?php 

$servername = "localhost";
$username = "root";
$password  = "";
$database = "projeto_php";

//Conexao bando de dados
$conexao = mysqli_connect($servername,$username,$password,$database);

//validar conexao
if(!$conexao) {
	die("Connection failed: " .mysqli_connect_error());
} 
echo "Conected successfully";

?>