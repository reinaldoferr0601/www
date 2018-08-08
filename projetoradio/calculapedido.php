<?php

// receber os dados
$sabor = $_POST['op'];
empty($_POST['op']);

if(empty($_POST['rbborda'])){
    $borda = null;
}else{
        $borda = $_POST['rbborda'];
}

if(empty($_POST['ckrefri'])){
    $refri = null;
}else{
        $refri = $_POST['ckrefri'];
}

//1 condicao = mussarella, borda caturipy e refri
if ($sabor == 1 && $borda == 1 && $refri == 1) {
    $preco_pizza = 29;
}

//2 condicao = mussarella, borda cheddar e refri
else if ($sabor == 1 && $borda == 2 && $refri == 1) {
    $preco_pizza = 30;
}

//3 condicao = mussarella, s/borda e refri
else if ($sabor == 1 && $refri == 1) {
    $preco_pizza = 27;
}

//3 condicao = so pizza
else if ($sabor == 1) {
    $preco_pizza = 25;
}

echo "O valor final de sua pizza foi: $preco_pizza";
echo "<a href='projetoradio.php'><br>Clique aqui para voltar</a><br>";