<?php

include('conecta.php');
$handle=fopen('cep.csv',r);
while ($data=fgetcsv($handle,1000,",")!=FALSE){
    echo $data[0];
    echo $data[1];
}

?>
