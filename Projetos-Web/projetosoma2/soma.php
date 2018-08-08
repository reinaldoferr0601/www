<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Soma Ninja</title>
    </head>
    <body>
        <h1>Projeto Soma Ninga</h1>
        <hr>
        <form method="GET">
            Valor 1 <br>
            <input type="text" name="txtv1"><br>
            <br>
            Valor 2 <br>
            <input type="text" name="txtv2"><br>
            <br>
            <input type="submit" name="btncalcular" value="Calcular">
                               
        </form>
        <?php
        //verificar se clicou no botao
        if($_GET){
        //receber os dados do formulario
        $num1 = $_GET['txtv1'];
        $num2 = $_GET['txtv2'];
        
        //efetuando o calculo
        $total = $num1 + $num2;
        
        //mostrar o resultado
        echo "O resultado da soma e $total";
        }
        ?>
    </body>
</html>
