<?php

//$link=  mysql_connect('209.97.130.137', 'cyberpc06', 'phoenix10', null, true);
$link=mysql_pconnect('209.97.130.137', 'root', '%phoenix17%');
if (!$link){
    die('Impossivel conectar no banco de dados remoto! ');
}
else {
    mysql_select_db('bdcomum', $link);
    return $link;
}

?>
