<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";


$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;

//abrir arquivo
$arquivo = fopen('arquivo.hd', 'a');
//excrevendo text
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');
