<?php
session_start();

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// remover índices do array de sessão
// unset()

// unset($_SESSION['x']); //remove o indice apenas se existir

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


// destruir a variavel de sessão
// session_destroy()

// session_destroy(); //será destruida
// forçar um redirecionamento

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

session_destroy();
header('Location: /public/index.php');