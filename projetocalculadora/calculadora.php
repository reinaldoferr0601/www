<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Calculadora</title>
    </head>
    <body>
        <h1>Projeto Calculadora</h1>
        <hr>
        <form method="POST">
            Valor 1 <br>
            <input type="text" name="txtv1"><br>
            <br>
            Valor 2 <br>
            <input type="text" name="txtv2"><br>
            <br>
            Operação: 
            <select name="op">
                <option value="1">Somar</option>
                <option value="2">Subtrair</option>
                <option value="3" >Multiplicar</option>
                <option value="4">Dividir</option>

            </select>
            <input type="submit" name="btncalcular" value="Calcular">

        </form>
        <?php
        if ($_POST) {
            //receber os dados
            $num1 = $_POST['txtv1'];
            $num2 = $_POST['txtv2'];
            $op = $_POST['op'];

            echo "Valor do campo 1 = $num1 <br>";
            echo "Valor do campo 2 = $num2 <br>";
            echo "Valor do campo 3 = $op <br>";

            if ($op == 1) {
                $total = $num1 + $num2;
            } else if ($op == 2) {
                $total = $num1 - $num2;
            } else if ($op == 3) {
                $total = $num1 * $num2;
            } else if ($op == 4) {
                $total = $num1 / $num2;
            }
            echo "O tota foi: $total";
        }
        ?>
    </body>
</html>
