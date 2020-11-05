<?php
<<<<<<< HEAD
session_start();
=======
echo "<pre>";
print_r($_POST);
echo "</pre>";

>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

<<<<<<< HEAD
$texto = $_SESSION['id'] . ' # ' . $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL; //PHP_EOL = End Of Line
=======
$texto = $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;
>>>>>>> 0792a0145605f2a116a64c882d8e0550b0f51fc2

//abrir arquivo
$arquivo = fopen('arquivo.hd', 'a');
//excrevendo text
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');
