<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Pizzaria - Radiobutton e Checkbox</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Projeto Pizzaria - Radiobutton e Checkbox</h1>
        <hr>
        <form method="POST" action="calculapedido.php">
            Selecione o Sabor da Pizza:
            <select name="op" class="form-control">
                <option value="1">Mussarela           - R$ 22,00</option>
                <option value="2">Portuguesa          - R$ 25,00</option>
                <option value="3">Frango com Catupiry - R$ 30,00</option>
            
            </select>
            <br>
            <br>
            <fieldset>
                <legend>Opção com borda recheada:</legend>
                <input type="radio" name="rbborda" value="1"> Borda Catupiry - R$ 2,00
                <br>
                <input type="radio" name="rbborda" value="2"> Borda Cheddar  - R$ 3,00
            </fieldset>
            <br>
            <fieldset>
                <legend>Acompanhamento:</legend>
                <input type="checkbox" name="ckrefri" value="1"> Dolly 2 litros       - R$ 5,00
                <br>
                <input type="checkbox" name="ckrefri" value="2"> Antarctica 2 litros  - R$ 8,00
            </fieldset>
            <br>
            <input type="submit" class="btn btn-success" name="btncalcular" value="Calcular">
            <input type="reset" class="btn btn-danger" name="btnlimpar" value="Limpar">
        </form>

    </body>
</html>
