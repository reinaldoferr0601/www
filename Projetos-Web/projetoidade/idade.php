<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Idade</title>
    </head>
    <body>
        <h1>Projeto Idade - Estrutura condicional</h1>
        <hr>
        <form method="POST">
            Ano Atual <br>
            <input type="text" name="txtanoatual"><br>
            <br>
            Ano Nascimento <br>
            <input type="text" name="txtanonascimento"><br>
            <br>
            <input type="submit" name="btncalcular" value="Calcular">
                               
        </form>
        <?php
        //verificar se clicou no botao
        if($_POST){
        //receber os dados do formulario
        $anoatual = $_POST['txtanoatual'];
        $anonascimento = $_POST['txtanonascimento'];
        
        //efetuando o calculo
        $idade = $anoatual - $anonascimento;
        
        //mostrar o resultado
        echo "Sua idade e: <b>$idade</b> <br>"; 
        
       
        if($idade >= 18){
            echo "<i>Voce é maior de idade</i> <br>";
        } else {
            echo "<i>Voce é menor de idade</i> <br>";
        }
        }
        ?>
    </body>
</html>
