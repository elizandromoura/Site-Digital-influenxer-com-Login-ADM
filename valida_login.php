<?php

session_start();



//variaveis
$usuario_autenticado = false;
//Usuários do sistema
$usuarioadm = array(
    array('email' => 'thaisadm@online', 'senha' => 'adm1234'),
    array('email' => 'adm@online', 'senha' => 'adm1234')
);


foreach($usuarioadm as $user){
    
if ($user['email'] == $_POST['email'] &&$user['senha'] == $_POST['senha']) {
    $usuario_autenticado = true;
}

}

if ($usuario_autenticado) {
    
    $_SESSION['autenticado'] = 'SIM';
    header('location: admin.php');
        
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('location: login.php?login=erro');
}

/*
echo '<pre>';
print_r($usuarioadm);
echo '<pre>';
*/



?>