<?php
include_once('../classes/PHP/conexao.php');
function atualizar_versao($nome_objeto){
    $crc1 = strtoupper(dechex(crc32(file_get_contents($file1))));
    $crc2 = strtoupper(dechex(crc32(file_get_contents($file2))));
    if ($crc1!=$crc2) {
    
    } else {
    // files the same
    }
}
?>
