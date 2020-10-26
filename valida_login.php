<?php
session_start();
//variavel que verifica se a autenticacao foi realizada
$usuarios_autenticado = false;

//usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcde'),
);

foreach ($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
    }
}

if($usuarios_autenticado){
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
    
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
