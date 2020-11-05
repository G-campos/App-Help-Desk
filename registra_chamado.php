<?php
session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . ' # ' . $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL; //PHP_EOL = End Of Line

//abrir arquivo
$arquivo = fopen('arquivo.hd', 'a');
//excrevendo text
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');
