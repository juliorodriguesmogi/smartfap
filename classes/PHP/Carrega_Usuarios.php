<?php
session_start();
//gambiarra para o IECA;
header("Content-Type: text/html; charset=ISO-8859-1", true);
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');

$tabela=(String) $_GET['tabela'];
$l=include_once('conexao.php');
$sql_usuario="Select * from `$tabela` order by NOME_USUARIO";
$result=mysql_query($sql_usuario);
if (mysql_num_rows($result)==0){
    echo "NF";
    return;
}
while($row=mysql_fetch_row($result)){
        $campo='';

        foreach ($row as $valor){
            $valor=ereg_replace("\r", "", $valor); 
            $valor=ereg_replace("\n", "", $valor); 
            $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);
            $valor=  utf8_decode($valor);        
            $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";
}
?>
