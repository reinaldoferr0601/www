<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Switch</title>
    </head>
    <body>
        <h1>Selecione uma marca</h1>
        <form method="POST">
            <select name="cdmarcas">
                <option value="1">Apple</option>
                <option value="2">MS</option>
                <option value="3">Samsung</option>

            </select>
            <br>
            <br>
            <input type="submit" name="btnverifica" value="Escolher marca">
        </form>
        <br>
        <hr>
        <h2>O Usuario escolheu a marca: </h2>
        <?php
        if ($_POST) {
            $marca = $_POST['cdmarcas'];
            switch ($marca) {
                case 1:
                    echo "O usuario escolheru Apple";
                    break;
                case 2:
                    echo "O usuario escolheu MS";
                    break;
                case 3:
                    echo "O usuario escolheu Samsung";
                default:
                    echo "Marca desconhecida";
                    break;
            }
        }
        ?>
    </body>
</html>
