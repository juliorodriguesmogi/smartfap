<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
$link=  mysql_connect('209.97.130.137', 'cyberpc06', 'phoenix10', null, true);
if (!$link){
    die('Impossivel conectar no banco de dados remoto! ');
}
else {
    mysql_select_db('cyberpc06', $link);
    return $link;
}
?>
