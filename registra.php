<?php

$patro = $_POST['patrocinador'];
$texto = $patro . PHP_EOL;
//abrindo arquivo
$arquivo = fopen('arquivo.hd', 'a');
//escrevendo testo
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);

header('location: admin.php');

?>